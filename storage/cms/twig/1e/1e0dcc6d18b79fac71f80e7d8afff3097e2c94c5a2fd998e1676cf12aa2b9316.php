<?php

/* /home/ubuntu/workspace/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_b8bda04e8630b43ccddf4758e77e4a3e841beca378cfe659c3e3f4c69920b4ca extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array())) {
            // line 2
            echo "    <ul class=\"category-list\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 4
(isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 5
(isset($context["__SELF__"]) ? $context["__SELF__"] : null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 3
(isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 3,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if __SELF__.categories %}
    <ul class=\"category-list\">
        {% partial __SELF__ ~ \"::items\"
            categories = __SELF__.categories
            currentCategorySlug = __SELF__.currentCategorySlug
        %}
    </ul>
{% endif %}
";
    }
}
