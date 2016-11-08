<?php

/* /home/ubuntu/workspace/themes/martin-flex/pages/login.htm */
class __TwigTemplate_197be324f77e92b640c0300503d4c2d55d6baa18e59b41669d59df0254649370 extends Twig_Template
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
<div class=\"container\">
";
        // line 8
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 9
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 14
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "        </div>

        <div class=\"col-md-6\">
            <h3>Register</h3>
            ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "        </div>

    </div>

";
        } else {
            // line 25
            echo "
    ";
            // line 26
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "
    ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
    ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["account"]) ? $context["account"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
";
        }
        // line 33
        echo "

";
        // line 35
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 36
            echo "<div>
<button data-request=\"onLogout\">Выйти</button>
</div>
";
        }
        // line 40
        echo "</div>
";
        // line 41
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 42
            echo "<div class=\"container\">

</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  98 => 41,  95 => 40,  89 => 36,  87 => 35,  83 => 33,  79 => 31,  75 => 30,  72 => 29,  68 => 28,  65 => 27,  61 => 26,  58 => 25,  51 => 20,  47 => 19,  41 => 15,  37 => 14,  30 => 9,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<br>
<br>
<br>
<br>
<br>
<br>
<div class=\"container\">
{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            <h3>Register</h3>
            {% partial account ~ '::register' %}
        </div>

    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}


{%if user%}
<div>
<button data-request=\"onLogout\">Выйти</button>
</div>
{%endif%}
</div>
{%if user%}
<div class=\"container\">

</div>

{%endif%}";
    }
}
