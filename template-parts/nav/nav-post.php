<?php
/**
 *  ::::::'##::::'###:::::'######::'##::::'##:'####:'##::: ##:'########:
 *  :::::: ##:::'## ##:::'##... ##: ###::'###:. ##:: ###:: ##: ##.....::
 *  :::::: ##::'##:. ##:: ##:::..:: ####'####:: ##:: ####: ##: ##:::::::
 *  :::::: ##:'##:::. ##:. ######:: ## ### ##:: ##:: ## ## ##: ######:::
 *  '##::: ##: #########::..... ##: ##. #: ##:: ##:: ##. ####: ##...::::
 *   ##::: ##: ##.... ##:'##::: ##: ##:.:: ##:: ##:: ##:. ###: ##:::::::
 *  . ######:: ##:::: ##:. ######:: ##:::: ##:'####: ##::. ##: ########:
 *  :......:::..:::::..:::......:::..:::::..::....::..::::..::........::
 *
 * @package WordPress
 * @Theme jasmine
 *
 * @author admin@prettywordpress.com
 * @link https://www.prettywordpress.com
 * Template Name: 文章导航
 */

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    当前位置：
    <li><a href="<?php bloginfo('url');?>">首页</a></li>
    <li><a href="">&nbsp;>&nbsp;<?php the_category(', ') ?></a></li>
    <?php if (is_singular('post')){?>
    <li><a href="">&nbsp;>&nbsp;<?php the_title();}?></a></li>
  </ol>
</nav>