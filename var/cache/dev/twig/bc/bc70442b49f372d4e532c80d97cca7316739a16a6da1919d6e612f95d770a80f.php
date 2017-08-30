<?php

/* offer/area_json.html.json */
class __TwigTemplate_8051dd3e7dbb7bbcf64612db22f0de285d03a07cbbdafe73bd1429bdf3ba195c extends Twig_Template
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
        $__internal_4a4b0d627f568b978bc48daaef80da623009041f83f7981e5fdbee9836f146b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4b0d627f568b978bc48daaef80da623009041f83f7981e5fdbee9836f146b9->enter($__internal_4a4b0d627f568b978bc48daaef80da623009041f83f7981e5fdbee9836f146b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_json.html.json"));

        $__internal_713e303989748eba4cd839169fa92670a6b001680a27091991df0532063d44d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713e303989748eba4cd839169fa92670a6b001680a27091991df0532063d44d2->enter($__internal_713e303989748eba4cd839169fa92670a6b001680a27091991df0532063d44d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_json.html.json"));

        // line 1
        echo "
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 12
            echo "            <tr>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tbody>
</table>
";
        
        $__internal_4a4b0d627f568b978bc48daaef80da623009041f83f7981e5fdbee9836f146b9->leave($__internal_4a4b0d627f568b978bc48daaef80da623009041f83f7981e5fdbee9836f146b9_prof);

        
        $__internal_713e303989748eba4cd839169fa92670a6b001680a27091991df0532063d44d2->leave($__internal_713e303989748eba4cd839169fa92670a6b001680a27091991df0532063d44d2_prof);

    }

    public function getTemplateName()
    {
        return "offer/area_json.html.json";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  54 => 15,  50 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        {% for offer in offers %}
            <tr>
                <td><a href=\"{{ path('offer_show', { 'id': offer.id }) }}\">{{ offer.id }}</a></td>
                <td>{{ offer.title }}</td>
                <td>{{ offer.description }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "offer/area_json.html.json", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/area_json.html.json");
    }
}
