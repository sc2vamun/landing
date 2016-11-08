<?php

/* /home/ubuntu/workspace/themes/martin-flex/pages/home.htm */
class __TwigTemplate_0d42caec967d351359fd1230695b6c35a5830c782b9d4268598300959e68a8e9 extends Twig_Template
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
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("portfolio"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  40 => 13,  35 => 12,  31 => 11,  19 => 1,);
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

     
    {% partial 'services'  %}
    {% partial 'portfolio' %}
    {% partial 'team'      %}
    {% partial 'contact'   %}";
    }
}
