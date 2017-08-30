<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9691b15fbbabb66012993cbe65f9e5ea1b0e2273e3b1848a16a6771ebdb1d4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9691b15fbbabb66012993cbe65f9e5ea1b0e2273e3b1848a16a6771ebdb1d4a1->enter($__internal_9691b15fbbabb66012993cbe65f9e5ea1b0e2273e3b1848a16a6771ebdb1d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cc946f621002046ae6ac5d6687287f5095fc9cd1b926036e654a51fd9d4de210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc946f621002046ae6ac5d6687287f5095fc9cd1b926036e654a51fd9d4de210->enter($__internal_cc946f621002046ae6ac5d6687287f5095fc9cd1b926036e654a51fd9d4de210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9691b15fbbabb66012993cbe65f9e5ea1b0e2273e3b1848a16a6771ebdb1d4a1->leave($__internal_9691b15fbbabb66012993cbe65f9e5ea1b0e2273e3b1848a16a6771ebdb1d4a1_prof);

        
        $__internal_cc946f621002046ae6ac5d6687287f5095fc9cd1b926036e654a51fd9d4de210->leave($__internal_cc946f621002046ae6ac5d6687287f5095fc9cd1b926036e654a51fd9d4de210_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2202ed9dc921882020d33cd96617c2d9c326cc2dd6a28231d72db5d38340c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2202ed9dc921882020d33cd96617c2d9c326cc2dd6a28231d72db5d38340c39->enter($__internal_c2202ed9dc921882020d33cd96617c2d9c326cc2dd6a28231d72db5d38340c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f67a0d8ba3a974bf72c6e6d2770000f16cbc00183ec7bd4e1dd752cca5ef06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f67a0d8ba3a974bf72c6e6d2770000f16cbc00183ec7bd4e1dd752cca5ef06d->enter($__internal_0f67a0d8ba3a974bf72c6e6d2770000f16cbc00183ec7bd4e1dd752cca5ef06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0f67a0d8ba3a974bf72c6e6d2770000f16cbc00183ec7bd4e1dd752cca5ef06d->leave($__internal_0f67a0d8ba3a974bf72c6e6d2770000f16cbc00183ec7bd4e1dd752cca5ef06d_prof);

        
        $__internal_c2202ed9dc921882020d33cd96617c2d9c326cc2dd6a28231d72db5d38340c39->leave($__internal_c2202ed9dc921882020d33cd96617c2d9c326cc2dd6a28231d72db5d38340c39_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01181194ae0b2f92fa1707d889493b3f25b30336adbc18b207efe877ef31d9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01181194ae0b2f92fa1707d889493b3f25b30336adbc18b207efe877ef31d9f1->enter($__internal_01181194ae0b2f92fa1707d889493b3f25b30336adbc18b207efe877ef31d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_267d2c6d927972b52853a7328418b614bd253be468367de8549d46b9433da48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267d2c6d927972b52853a7328418b614bd253be468367de8549d46b9433da48f->enter($__internal_267d2c6d927972b52853a7328418b614bd253be468367de8549d46b9433da48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_267d2c6d927972b52853a7328418b614bd253be468367de8549d46b9433da48f->leave($__internal_267d2c6d927972b52853a7328418b614bd253be468367de8549d46b9433da48f_prof);

        
        $__internal_01181194ae0b2f92fa1707d889493b3f25b30336adbc18b207efe877ef31d9f1->leave($__internal_01181194ae0b2f92fa1707d889493b3f25b30336adbc18b207efe877ef31d9f1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca37ad1395eed7e192112c84ebe99c4e642343e64f56f3dc3374ef403d4d3612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca37ad1395eed7e192112c84ebe99c4e642343e64f56f3dc3374ef403d4d3612->enter($__internal_ca37ad1395eed7e192112c84ebe99c4e642343e64f56f3dc3374ef403d4d3612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29265f6336c38da5441264da80f54d7741006df33b0e53416129a9cb4ee443db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29265f6336c38da5441264da80f54d7741006df33b0e53416129a9cb4ee443db->enter($__internal_29265f6336c38da5441264da80f54d7741006df33b0e53416129a9cb4ee443db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_29265f6336c38da5441264da80f54d7741006df33b0e53416129a9cb4ee443db->leave($__internal_29265f6336c38da5441264da80f54d7741006df33b0e53416129a9cb4ee443db_prof);

        
        $__internal_ca37ad1395eed7e192112c84ebe99c4e642343e64f56f3dc3374ef403d4d3612->leave($__internal_ca37ad1395eed7e192112c84ebe99c4e642343e64f56f3dc3374ef403d4d3612_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
