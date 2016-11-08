<?php

/* /home/ubuntu/workspace/themes/martin-flex/pages/product1.htm */
class __TwigTemplate_05bc4947466acaedbc4cb0f76720e71b8aee8381b789cc3d4c900209b15e4891 extends Twig_Template
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
<br>
<br>
<br>
<br>
<br>
<br>
<div class=\"container\">


<form action=\"onClick\">
<input type=\"button\" value='Приобрести'>

</form>

";
        // line 23
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 24
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 25
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 26
        echo "
";
        // line 27
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 28
            echo "   <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "pname", array()), "html", null, true);
            echo "</h3>
   <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "pdescription", array()), "html", null, true);
            echo " </p>
";
        } else {
            // line 31
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
";
        }
        // line 33
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/pages/product1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  64 => 31,  59 => 29,  54 => 28,  52 => 27,  49 => 26,  47 => 25,  45 => 24,  43 => 23,  19 => 1,);
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
<br>
<br>
<br>
<br>
<br>
<br>
<div class=\"container\">


<form action=\"onClick\">
<input type=\"button\" value='Приобрести'>

</form>

{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
   <h3>{{record.pname}}</h3>
   <p>{{record.pdescription}} </p>
{% else %}
    {{ notFoundMessage }}
{% endif %}
</div>";
    }
}
