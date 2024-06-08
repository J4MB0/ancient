<?php

class Template {
    private $cssFile;
    private $title;
    private $metaKeywords;
    private $metaDescription;
    private $script;

    public function __construct($cssFile, $title, $metaKeywords = "", $metaDescription = "", $script = "") {
        $this->cssFile = $cssFile;
        $this->title = $title;
        $this->metaKeywords = $metaKeywords;
        $this->metaDescription = $metaDescription;
        $this->script = $script;
    }

    public function renderHeader() {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
            <title>{$this->title}</title>
            <meta name='keywords' content='{$this->metaKeywords}' />
            <meta name='description' content='{$this->metaDescription}' />
            <link href='{$this->cssFile}' rel='stylesheet' type='text/css' />
            {$this->script}
        </head>
        <body>";
    }

    public function renderFooter() {
        echo "</body>
        </html>";
    }

    public function includeFile($filePath) {
        include($filePath);
    }
}

class Content {
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function render() {
        echo $this->content;
    }
}

// Script na vyčistenie textového poľa
$script = "<script language='javascript' type='text/javascript'>
    function clearText(field) {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
</script>";

// Vytvorenie šablóny
$template = new Template("templatemo_style.css", "About Ancient - Free CSS Template", "", "", $script);
$template->renderHeader();
?>

<div id="templatemo_wrapper">

    <span class="bg_top"></span>
    <span class="bg_bottom"></span>

    <?php
    $template->includeFile("partials/menu.php");
    $template->includeFile("partials/header.php");
    ?>
    
    <div id="templatemo_main">
        <div class="cbox_fw">
            <h2>About Us</h2>
            <a href="#"><img src="images/templatemo_image_07.jpg" alt="image" class="image_frame image_fl" /></a>
            <p>Phasellus id purus. Donec mattis egestas sem. Sed pretium, neque hendrerit rhoncus accumsan, nibh tellus pharetra neque, quis rutrum elit justo vitae sapien. Sed nec felis. Vivamus laoreet pharetra eros. Cras feugiat. In ut ante. <a href="#">In quam nibh</a>, placerat ac, porta ac, molestie non, purus.</p>
            <p>Curabitur sem ante, condimentum non, cursus quis, eleifend non, libero. Nunc a nulla. Suspendisse vitae orci a ligula egestas bibendum. Vestibulum ultrices. Pellentesque tempus sapien nec sem commodo ullamcorper. <a href="#">Aenean neque</a>. Mauris in elit. Morbi nec magna pulvinar mi scelerisque posuere. Suspendisse rhoncus lectus sit amet justo. Pellentesque rutrum est non pede. <a href="#">Mauris varius</a> risus fermentum nulla. Mauris vel sapien mattis urna luctus ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus tincidunt vehicula est. Vestibulum purus. In hac habitasse <a href="#">platea dictumst</a>.</p>
            <a href="#" class="more float_r"><span>&gt;&gt;</span> View All</a>
            <div class="cleaner"></div>
        </div>
        
        <div id="content">
            <h3>Background</h3>
            <p>Ancient Template is designed by <a href="#">templatemo</a> website. Feel free to download, edit and apply this template for your personal or commercial websites. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Ut enim ad minim veniamquis nostrud exercitation ullamco lab.</p>
            <div class="cleaner h30"></div>
            <h3>Our Team</h3>
            <p>In fermentum, eros ac tincidunt aliquam, elit velit semper nunc, a tincidunt orci lectus a arcu. Nullam commodo, arcu non facilisis imperdiet, felis lectus tempus felis, vitae volutpat augue ante quis leo. Aliquam tristique dolor ac odio. Sed consectetur, lacus et dictum tristique, odio neque elementum ante, nec eleifend leo dolor vel tortor. Vivamus vulputate felis.</p>
            <p>Etiam luctus. Quisque facilisis suscipit elit. Curabitur eleifend congue leo. Donec a purus vel purus sollicitudin placerat. Nunc at sem. Sed pellentesque placerat augue. Mauris pede nisl, placerat nec, lobortis vitae, dictum sed, neque.</p>
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div>
    
    <?php
    $template->includeFile("partials/footer.php");
    ?>

</div> <!-- end of wrapper -->

<?php
$template->renderFooter();
?>
