<?php

/* /home/ubuntu/workspace/themes/martin-flex/partials/services.htm */
class __TwigTemplate_25eedc25cb416df2142c23b475cf23934b9c4ac882629b3665160fccf2900a13 extends Twig_Template
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
        echo "<div class=\"content-section\" id=\"services\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Консультации и практики</h2>
                <p>Возможности рядом. Протяните руку.</p>
            </div>
        </div>

        <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "        
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"/product/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "slug", array()), "html", null, true);
            echo "\">
                <div class=\"service-item\" id=\"service-";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pcolor", array()), "html", null, true);
            echo "\">
                    <div class=\"service-icon\">
                        <i class=\"fa fa-file-code-o\"></i>
                    </div>
                    <div class=\"service-content\">
                        <div class=\"inner-service\">
                           <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pname", array()), "html", null, true);
            echo "</h3>
                           <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pdescription", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  57 => 23,  53 => 22,  44 => 16,  40 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-section\" id=\"services\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Консультации и практики</h2>
                <p>Возможности рядом. Протяните руку.</p>
            </div>
        </div>

        <div class=\"row\">
        {% for product in products %}
        
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"/product/{{product.slug}}\">
                <div class=\"service-item\" id=\"service-{{product.pcolor}}\">
                    <div class=\"service-icon\">
                        <i class=\"fa fa-file-code-o\"></i>
                    </div>
                    <div class=\"service-content\">
                        <div class=\"inner-service\">
                           <h3>{{ product.pname }}</h3>
                           <p>{{ product.pdescription}}</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        {% endfor %}
        </div>

    </div>
</div>";
    }
}
