<?php
// 获取文件 $_FILES
// 保存图片流程

// 1、获取表单传过来的文件临时目录
$tmp_file =$_FILES['slider_img']['tmp_name'];
// 2、copy复制临时文件到项目指定目录uploads
// 	2.1、以时间戳132165465465(time())命名文件
$save_path ='uploads/'.time().'.jpg';
copy($tmp_file,$save_path);

save_info('d724_slider.json',['slider_img'=>$save_path,'link'=>$_POST['link']
]);
/**
 * 保存内容
 * @param  string $file_name 文件名
 * @param  array $save_data 保存的内容
 * @return array            所有信息
 */
function save_info($file_name,$save_data){
    $data_json_str =file_get_contents($file_name);
    $data_a =json_decode($data_json_str,true);
    $data_a[] =$save_data;
    file_put_contents($file_name,json_encode($data_a));
    return $data_a;
}
?>