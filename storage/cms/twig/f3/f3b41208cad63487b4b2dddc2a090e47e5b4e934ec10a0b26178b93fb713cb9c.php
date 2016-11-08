<?php

/* /home/ubuntu/workspace/themes/martin-flex/pages/lichnyj-kabinet.htm */
class __TwigTemplate_bb00474f46e1bb714d86c8c04235c7eb0022a4f4409b7bc2d39241ab5cd68018 extends Twig_Template
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
        echo "<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

";
        // line 10
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 11
            echo "<div class=\"container heading-section col-md-12 text-center\">
<h2>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo ", Добро пожаловать в Ваш Личный кабинет </h2>
<br>
<br>
<br>
<button data-request=\"onLogout\" >Выйти</button>
</div>

";
        } else {
            // line 20
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/pages/lichnyj-kabinet.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

{%if user%}
<div class=\"container heading-section col-md-12 text-center\">
<h2>{{user.name}}, Добро пожаловать в Ваш Личный кабинет </h2>
<br>
<br>
<br>
<button data-request=\"onLogout\" >Выйти</button>
</div>

{%else%}


{%endif%}";
    }
}
