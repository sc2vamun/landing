<?php

/* /home/ubuntu/workspace/themes/martin-flex/pages/blog.htm */
class __TwigTemplate_7de64378b95bf9295e8efed51580793033021b59fe67bfca3f5a642189c4037e extends Twig_Template
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
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
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
{% component 'blogPosts' %}
{% component 'blogCategories' %}
</div>";
    }
}
