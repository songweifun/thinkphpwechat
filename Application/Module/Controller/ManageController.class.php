<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午9:21
 */

namespace Module\Controller;


use Common\Controller\AdminController;
use Common\Model\ModulesModel;

class ManageController extends AdminController
{
    /**
     * 模块管理
     */
    public function lists(){
        $files=glob('Addons/*');//通过目录读取已设计的模块到列表  通过数据库读取已安装的模块到左侧栏
        $manifests=[];
        foreach ($files as $f){
            if(file_exists($f.'/manifest.php')){
                $config=include $f.'/manifest.php';
                $manifests[]=$config;
            }
        }
        $this->assign('modules',$manifests);

        $model=new ModulesModel();
        $areadyInstallModules=$model->getField("name",true);//从数据库读取所有的已安装模块
        $this->assign("areadyInstall",$areadyInstallModules);
        //dd($areadyInstallModules);exit;


        $this->display();

    }

    /**
     * 模块安装
     */
    public function install(){
        $name=$_GET['name'];
        //安装就是将manifest数据存入数据库 创建ModulesModel数据模型来操作 Module表
        $model=new ModulesModel();
        if($model->where(array("name"=>$name))->select()){
            $this->error("您所选的模块已经安装!不可重复安装!");
        }
        $manifest=include 'Addons/'.$name.'/manifest.php';
        $manifest['actions']=json_encode($manifest['actions'],JSON_UNESCAPED_UNICODE);
        $this->store($model,$manifest);


        //dd($manifest);

    }

    /**
     * 模块卸载
     * 指的是从数据库中删除记录 模块设计时创建的文件夹是不变的
     */
    public function unInstall(){
        $name=$_GET['name'];
        $model=new ModulesModel();
        if($model->where(array('name'=>$name))->delete()){
            $this->success("卸载成功!",U('lists'));
        }else{
            $this->error("卸载失败!",U('lists'));
        }

    }

    /**
     * 模块设计
     */
    public function design(){
        if(IS_POST){

            $_POST['name']=ucfirst($_POST['name']);

            $pathName='Addons/'.$_POST['name'];

            if(is_dir($pathName)){
                $this->error("模块已经存在不允许重复添加!");
            }else{

                mkdir($pathName,0755);//创建模块的目录
                $this->creatManiFest();

                $files=glob('Data/Module/*.php');//遍历Data目录中的所有文件
                foreach ($files as $f){
                    //替换命名空间字符串
                    $content=str_replace('{NAME}',$_POST['name'],file_get_contents($f));
                    //将替换完的字符串写入模块目录
                    file_put_contents($pathName.'/'.basename($f),$content);
                }
                mkdir($pathName.'/View',0755);//在模块目录中创建一个用于存放视图的目录
                //dd($files);
                $this->success("模块创建成功!","lists");exit;
            }
        }
        $this->display();

    }

    //格式化设置模块的数据
    protected function creatManiFest(){
        $actions=array_filter(preg_split("@(\r|\n)@",$_POST['actions']));
        $actionData=[];
        foreach ($actions as $v){
            $info=explode('|',$v);
            $actionData[]=['title'=>$info[0],'name'=>$info[1]];
        }

        $_POST['actions']=$actionData;
        $pathName='Addons/'.$_POST['name'];
        $manifest='<?php return '.var_export($_POST,true).';?>';
        file_put_contents($pathName.'/manifest.php',$manifest);


    }

}