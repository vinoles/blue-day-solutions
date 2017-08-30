<?php

/* offer/show.html.twig */
class __TwigTemplate_d0918914ef61d2f610a08d3619792674f6966e3f5e1af76ced34046b06ad60f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offer/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_192e0e0546162f2ff12928966b49ac48cf51ce8b166d75d74a4311c800975934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192e0e0546162f2ff12928966b49ac48cf51ce8b166d75d74a4311c800975934->enter($__internal_192e0e0546162f2ff12928966b49ac48cf51ce8b166d75d74a4311c800975934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/show.html.twig"));

        $__internal_10f1d61f46e569129306f288cd5ca817be57466c207853691dfd11fffc914fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f1d61f46e569129306f288cd5ca817be57466c207853691dfd11fffc914fde->enter($__internal_10f1d61f46e569129306f288cd5ca817be57466c207853691dfd11fffc914fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192e0e0546162f2ff12928966b49ac48cf51ce8b166d75d74a4311c800975934->leave($__internal_192e0e0546162f2ff12928966b49ac48cf51ce8b166d75d74a4311c800975934_prof);

        
        $__internal_10f1d61f46e569129306f288cd5ca817be57466c207853691dfd11fffc914fde->leave($__internal_10f1d61f46e569129306f288cd5ca817be57466c207853691dfd11fffc914fde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eb7009e17768dee6ba52d952037a69e350b90edb59c5ae49529057f4b07e904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb7009e17768dee6ba52d952037a69e350b90edb59c5ae49529057f4b07e904->enter($__internal_7eb7009e17768dee6ba52d952037a69e350b90edb59c5ae49529057f4b07e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a076c5faabfb29857886dd6a944c0d0581a0f7fee501417906dbf8e82ff77d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a076c5faabfb29857886dd6a944c0d0581a0f7fee501417906dbf8e82ff77d6b->enter($__internal_a076c5faabfb29857886dd6a944c0d0581a0f7fee501417906dbf8e82ff77d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Offer</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_edit", array("id" => $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a076c5faabfb29857886dd6a944c0d0581a0f7fee501417906dbf8e82ff77d6b->leave($__internal_a076c5faabfb29857886dd6a944c0d0581a0f7fee501417906dbf8e82ff77d6b_prof);

        
        $__internal_7eb7009e17768dee6ba52d952037a69e350b90edb59c5ae49529057f4b07e904->leave($__internal_7eb7009e17768dee6ba52d952037a69e350b90edb59c5ae49529057f4b07e904_prof);

    }

    public function getTemplateName()
    {
        return "offer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Offer</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ offer.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ offer.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ offer.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('offer_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('offer_edit', { 'id': offer.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "offer/show.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/show.html.twig");
    }
}
