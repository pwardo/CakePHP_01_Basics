<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title><?php $title_for_layout; ?></title>
    <?php echo $this->Html->css('styles'); ?>

</head>
<body>

<header id="ex_header">
    <h1>Header - Admin layout</h1>
</header>

<nav id="ex_navbar">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Support</a></li>
        <li><?php echo $this->Html->link('Logout', array('controller' => 'home', 'action' => 'index')); ?></li>
    </ul>

</nav>

<section id="ex_middle">

    <aside id="ex_sidebar">
        <h3>Admin Links</h3>
        <ul>
            <li><a href="#">Add new post</a></li>
            <li><a href="#">Edit this post</a></li>
            <li><a href="#">Delete this post</a></li>
        </ul>
    </aside>

    <article id="ex_main">
        <h1>Admin</h1>
        <p>Nunc auctor bibendum eros. Maecenas porta accumsan mauris. Etiam enim enim, elementum sed, bibendum quis, rhoncus non, metus. Fusce neque dolor, adipiscing sed, consectetuer et, lacinia sit amet, quam. Suspendisse wisi quam, consectetuer in, blandit sed, suscipit eu, eros. Etiam ligula enim, tempor ut, blandit nec, mollis eu, lectus. Nam cursus. Vivamus iaculis. Aenean risus purus, pharetra in, blandit quis, gravida a, turpis. Donec nisl. Aenean eget mi. Fusce mattis est id diam. Phasellus faucibus interdum sapien. Duis quis nunc. Sed enim.</p>
		
    </article>

    <!-- make the middle region's background color expand -->
    <div class="clear"></div>

</section>

<footer id="ex_footer">
    <h6>Copyright © 2010 Lorem Ipsum Awesome.</h6>
</footer>

</body>
</html>