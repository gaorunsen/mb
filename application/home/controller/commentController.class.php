<?php
    /**
     * 留言模板控制器类
     */

     class commentController{
        /**
         * 留言列表
         */
        public function listAction(){
            //载入视图文件
            require'./application/home/view/comment_list.html';
        }
        /**
         * 发表留言
         */
        public function addAction(){
            //判断是否是post方式提交
            if(empty($_POST)){
                return false;
            }
            //实例化comment模型
            $commentModel=new commentModel();
            //调用insert方法
            $pass=$commentModel->insert();
            //判断是否执行成功
            if($pass){
                //成功时
                echo"发表成功";
            }else{
                //失败时
                echo"发表失败";
            }
        }
     }
?>