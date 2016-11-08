<?php

/* /home/ubuntu/workspace/themes/martin-flex/partials/portfolio.htm */
class __TwigTemplate_28861bfb6b5d9dd6b8e1682914ad4cd7a3cd0ae120ea26c8fc09b45bc1ff24d5 extends Twig_Template
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
        echo "<div class=\"content-section\" id=\"portfolio\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Программы и курсы</h2>
                <p>Работа над собой - ключ к изменению мира</p>
            </div>
        </div>

        <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolio"]) ? $context["portfolio"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "            <div class=\"portfolio-item col-md-3 col-sm-6\">
                <div class=\"portfolio-thumb\">
                    <img src=\"";
            // line 15
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(("assets/images/gallery/" . $this->getAttribute($context["row"], "image", array(), "array")));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array(), "array"), "html", null, true);
            echo "\">
                    <div class=\"portfolio-overlay\">
                        <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array(), "array"), "html", null, true);
            echo "</h3>
                        <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "caption", array(), "array"), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(("assets/images/gallery/" . $this->getAttribute($context["row"], "image", array(), "array")));
            echo "\" data-rel=\"lightbox\" class=\"expand\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/martin-flex/partials/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  55 => 19,  51 => 18,  47 => 17,  40 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-section\" id=\"portfolio\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Программы и курсы</h2>
                <p>Работа над собой - ключ к изменению мира</p>
            </div>
        </div>

        <div class=\"row\">
        {% for row in portfolio %}
            <div class=\"portfolio-item col-md-3 col-sm-6\">
                <div class=\"portfolio-thumb\">
                    <img src=\"{{ ('assets/images/gallery/' ~ row['image']) |theme }}\" alt=\"{{ row['title'] }}\">
                    <div class=\"portfolio-overlay\">
                        <h3>{{ row['title']  }}</h3>
                        <p>{{ row['caption'] }}</p>
                        <a href=\"{{ ('assets/images/gallery/' ~ row['image']) |theme }}\" data-rel=\"lightbox\" class=\"expand\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>

    </div>
</div>";
    }
}
