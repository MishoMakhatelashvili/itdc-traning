<?php
$nav = [
    ['id' => 'home', 'name' => 'Home',],
    ['id' => 'about', 'name' => 'About', ],
    ['id' => 'blog', 'name' => 'Blog', ],
    ['id' => 'contact', 'name' => 'Contact',],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content', 'type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About content','type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'list'  => [
            ['listname' => 'news', 'name' => 'siaxleebi'],
            ['listname' => 'product', 'name' => 'produqti'],
            ['listname' => 'about', 'name' => 'shesaxeb'],
            ['listname' => 'site', 'mame' => 'saiti'],
          ],

        'type' => 'list'
         

    ],
   'contact' => ['title' => 'Contact', 'body' => 'Contact content','type' => 'text'],

];

$info = [
    'news'=> ['body'=>'siaxleebi,ambebi'],
    'product'=>['body'=>'product ragaca'],
    'about'=>['body'=>'about ragaca'],
    'site'=>['body'=>'saiti ragaca'],
];

?>
<ul>
    <?php foreach ($nav as $v): ?>
    <li><a href="http://student.itdc.ge/mikheil.makhatelashvili/?page=<?=$v['id']?>"><?=$v['name']?></a></li>
    <?php endforeach;?>
</ul>


<?php
if(isset($_GET['page'])):
	$page=$content[$_GET['page']]; ?>

<?php
 if($page['type']=='text'):?>
  	<h1><?echo $page['title']; ?></h1>
 <?php else:?>
   <?php foreach($page['list'] as $d):?>
 				<li><a class="a" href="http://student.itdc.ge/mikheil.makhatelashvili/?listname=<?=$d['listname']?>"> <? echo $d['listname']?> <a/></li>

    <?php endforeach;?>
    

  
<?php endif;?>

<?php endif;?>

<?php
if(isset($_GET['listname'])):
    $listname=$info[$_GET['listname']];
    echo $listname['body'];

  ?> 
<?php endif;?>
