<?php

/* /home/ubuntu/workspace/themes/martin-flex/partials/site-header.htm */
class __TwigTemplate_369ad50235dd7d2aaafa3a7714fed7443c3382c8b0a177cb1d58c901876e1b01 extends Twig_Template
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
        echo "<div class=\"site-header\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <ul class=\"social-icons\">
                    <li><a href=\"https://www.facebook.com/darlingalmaty/\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-dribbble\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"main-header\">
        <div class=\"container\">
            <div id=\"menu-wrapper\">
                <div class=\"row\">
                    <div class=\"logo-wrapper col-md-4 col-sm-2 col-xs-8\">
                        
                        <h1>
                            <a class=\"font\" href=\"#\">Darling</a>
                        </h1>
                    </div>
                    <div class=\"col-md-8 col-sm-10 col-xs-4 main-menu text-right\">
                        <ul class=\"menu-first hidden-sm hidden-xs\">
                            <li id=\"DARLING\"><a href=\"/\">Главная</a></li>
                            <li id=\"БЛОГ\"><a href=\"/blog\">БЛОГ</a></li>
                        ";
        // line 30
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 31
            echo "                            <li id=\"Личный\"><a  href=\"/cabinet\">ПРИВЕТ, ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a></li>
                        ";
        } else {
            // line 33
            echo "                            <li id=\"Войти\"><a href=\"/login\">Войти</a></li>
                        ";
        }
        // line 35
        echo "                            <li><a href=\"/#contact\">КОНТАКТЫ</a></li>
                        </ul>
                        <a href=\"#\" class=\"toggle-menu visible-sm visible-xs\"><i class=\"fa fa-bars\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"menu-responsive hidden-md hidden-lg\">
                <ul>
                    <li class=\"active\"><a href=\"#\">Главная</a></li>
                    <li><a href=\"/blog\">БЛОГ</a></li>
                    
                    ";
        // line 46
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 47
            echo "                    <li><a href=\"#portfolio\">ПРИВЕТ, ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        } else {
            // line 49
            echo "                    <li><a href=\"/login\">ВХОД</a></li>
                    ";
        }
        // line 51
        echo "                    <li><a href=\"#contact\">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/partials/site-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  83 => 49,  77 => 47,  75 => 46,  62 => 35,  58 => 33,  52 => 31,  50 => 30,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"site-header\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <ul class=\"social-icons\">
                    <li><a href=\"https://www.facebook.com/darlingalmaty/\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-dribbble\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"main-header\">
        <div class=\"container\">
            <div id=\"menu-wrapper\">
                <div class=\"row\">
                    <div class=\"logo-wrapper col-md-4 col-sm-2 col-xs-8\">
                        
                        <h1>
                            <a class=\"font\" href=\"#\">Darling</a>
                        </h1>
                    </div>
                    <div class=\"col-md-8 col-sm-10 col-xs-4 main-menu text-right\">
                        <ul class=\"menu-first hidden-sm hidden-xs\">
                            <li id=\"DARLING\"><a href=\"/\">Главная</a></li>
                            <li id=\"БЛОГ\"><a href=\"/blog\">БЛОГ</a></li>
                        {%if user%}
                            <li id=\"Личный\"><a  href=\"/cabinet\">ПРИВЕТ, {{user.name}}</a></li>
                        {%else%}
                            <li id=\"Войти\"><a href=\"/login\">Войти</a></li>
                        {%endif%}
                            <li><a href=\"/#contact\">КОНТАКТЫ</a></li>
                        </ul>
                        <a href=\"#\" class=\"toggle-menu visible-sm visible-xs\"><i class=\"fa fa-bars\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"menu-responsive hidden-md hidden-lg\">
                <ul>
                    <li class=\"active\"><a href=\"#\">Главная</a></li>
                    <li><a href=\"/blog\">БЛОГ</a></li>
                    
                    {%if user%}
                    <li><a href=\"#portfolio\">ПРИВЕТ, {{user.name}}</a></li>
                    {%else%}
                    <li><a href=\"/login\">ВХОД</a></li>
                    {%endif%}
                    <li><a href=\"#contact\">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>";
    }
}
