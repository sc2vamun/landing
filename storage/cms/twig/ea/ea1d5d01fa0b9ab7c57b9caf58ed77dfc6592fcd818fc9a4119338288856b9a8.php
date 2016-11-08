<?php

/* /home/ubuntu/workspace/themes/martin-flex/layouts/default.htm */
class __TwigTemplate_36f38f904f9bc53dc66d43e172a0791d038ddb739a7c2ecc4c5246b3a9d31070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\">        <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\">               <![endif]-->
<!--[if gt IE 8]> <!--> <html class=\"no-js\">                 <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"shortcut icon\" href=\"http://land-new-sc2vamun.c9users.io/themes/martin-flex/assets/images/logo1.png\" type=\"image/png\">

<!--
Flex Template
http://www.templatemo.com/free-website-templates/406-flex
-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/animate.css", 3 => "assets/css/templatemo_misc.css", 4 => "assets/css/templatemo_style.css", 5 => "assets/css/Custom.css"));
        // line 25
        echo "\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Molle:400i\" rel=\"stylesheet\">
    <script src=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"));
        echo "\"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
       ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-main"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
    ";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "
    ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
    <script src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/vendor/jquery-1.11.0.min.js", 1 => "assets/js/bootstrap.js", 2 => "assets/js/plugins.js", 3 => "assets/js/main.js", 4 => "assets/js/Custom.js", 5 => "@framework", 6 => "@framework.extras"));
        // line 46
        echo "\"></script>

    <!-- Google Map -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/vendor/jquery.gmap3.min.js"));
        echo "\"></script>

    <!-- Google Map Init-->
    <script type=\"text/javascript\">
        jQuery(function(\$){
            \$('#map_canvas').gmap3({
                marker: {
                    address: '16.8496189,96.1288854'
                },
                map:{
                    options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                    }
                }
            });
        });
    </script>
    ";
        // line 69
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 70
        echo "
    <!-- templatemo 406 flex -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 70,  105 => 69,  83 => 50,  77 => 46,  75 => 39,  72 => 38,  68 => 37,  65 => 36,  63 => 35,  60 => 34,  56 => 33,  47 => 27,  43 => 25,  41 => 18,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\">        <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\">               <![endif]-->
<!--[if gt IE 8]> <!--> <html class=\"no-js\">                 <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>{{this.page.title}}</title>
\t<meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"shortcut icon\" href=\"http://land-new-sc2vamun.c9users.io/themes/martin-flex/assets/images/logo1.png\" type=\"image/png\">

<!--
Flex Template
http://www.templatemo.com/free-website-templates/406-flex
-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.css',
        'assets/css/animate.css',
        'assets/css/templatemo_misc.css',
        'assets/css/templatemo_style.css',
        'assets/css/Custom.css'
    ]|theme }}\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Molle:400i\" rel=\"stylesheet\">
    <script src=\"{{ ['assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js']|theme }}\"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
       {% partial 'site-main'%}

    {%page%}

    {% partial 'footer'    %}

    <script src=\"{{ [
        'assets/js/vendor/jquery-1.11.0.min.js',
        'assets/js/bootstrap.js',
        'assets/js/plugins.js',
        'assets/js/main.js',
        'assets/js/Custom.js',
        '@framework',
        '@framework.extras']|theme }}\"></script>

    <!-- Google Map -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script src=\"{{ ['assets/js/vendor/jquery.gmap3.min.js']|theme }}\"></script>

    <!-- Google Map Init-->
    <script type=\"text/javascript\">
        jQuery(function(\$){
            \$('#map_canvas').gmap3({
                marker: {
                    address: '16.8496189,96.1288854'
                },
                map:{
                    options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                    }
                }
            });
        });
    </script>
    {% scripts %}

    <!-- templatemo 406 flex -->

</body>
</html>";
    }
}
