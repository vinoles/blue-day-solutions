<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41d6a50260779c4e5c887f19b0850d04970733a8fd851449cd3673e2ada03413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d6a50260779c4e5c887f19b0850d04970733a8fd851449cd3673e2ada03413->enter($__internal_41d6a50260779c4e5c887f19b0850d04970733a8fd851449cd3673e2ada03413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9795281c8bfe423ae1bd4403bc29783010ab2dda0e2519e206017aae6f054014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9795281c8bfe423ae1bd4403bc29783010ab2dda0e2519e206017aae6f054014->enter($__internal_9795281c8bfe423ae1bd4403bc29783010ab2dda0e2519e206017aae6f054014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_41d6a50260779c4e5c887f19b0850d04970733a8fd851449cd3673e2ada03413->leave($__internal_41d6a50260779c4e5c887f19b0850d04970733a8fd851449cd3673e2ada03413_prof);

        
        $__internal_9795281c8bfe423ae1bd4403bc29783010ab2dda0e2519e206017aae6f054014->leave($__internal_9795281c8bfe423ae1bd4403bc29783010ab2dda0e2519e206017aae6f054014_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9523f22e155ea0949b4767d7a586b6f03102bff092185d684ab87cfcc86864bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9523f22e155ea0949b4767d7a586b6f03102bff092185d684ab87cfcc86864bd->enter($__internal_9523f22e155ea0949b4767d7a586b6f03102bff092185d684ab87cfcc86864bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdb1f0b32ce8efa80ed9150f43053f01fb48eb5bfc951fde200d7d10dd268799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb1f0b32ce8efa80ed9150f43053f01fb48eb5bfc951fde200d7d10dd268799->enter($__internal_bdb1f0b32ce8efa80ed9150f43053f01fb48eb5bfc951fde200d7d10dd268799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bdb1f0b32ce8efa80ed9150f43053f01fb48eb5bfc951fde200d7d10dd268799->leave($__internal_bdb1f0b32ce8efa80ed9150f43053f01fb48eb5bfc951fde200d7d10dd268799_prof);

        
        $__internal_9523f22e155ea0949b4767d7a586b6f03102bff092185d684ab87cfcc86864bd->leave($__internal_9523f22e155ea0949b4767d7a586b6f03102bff092185d684ab87cfcc86864bd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f565e297c82d6ac9ee68ae8d8abb8ac0cf198ebc10658128c559ddfb84c7532d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f565e297c82d6ac9ee68ae8d8abb8ac0cf198ebc10658128c559ddfb84c7532d->enter($__internal_f565e297c82d6ac9ee68ae8d8abb8ac0cf198ebc10658128c559ddfb84c7532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d23b8f31959fa53b363a33ab766ef02188e11120b417ea432bb859b97aed8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d23b8f31959fa53b363a33ab766ef02188e11120b417ea432bb859b97aed8b5->enter($__internal_5d23b8f31959fa53b363a33ab766ef02188e11120b417ea432bb859b97aed8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5d23b8f31959fa53b363a33ab766ef02188e11120b417ea432bb859b97aed8b5->leave($__internal_5d23b8f31959fa53b363a33ab766ef02188e11120b417ea432bb859b97aed8b5_prof);

        
        $__internal_f565e297c82d6ac9ee68ae8d8abb8ac0cf198ebc10658128c559ddfb84c7532d->leave($__internal_f565e297c82d6ac9ee68ae8d8abb8ac0cf198ebc10658128c559ddfb84c7532d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_43648d85f3f5fb7cebaf51ca2e5e245d29f13ea85bde51a7c87f9c20a186efc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43648d85f3f5fb7cebaf51ca2e5e245d29f13ea85bde51a7c87f9c20a186efc4->enter($__internal_43648d85f3f5fb7cebaf51ca2e5e245d29f13ea85bde51a7c87f9c20a186efc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_380a83f35c0a18f53f12d539124180f3944e5d703c0a15c1c7abfe8b29a19f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380a83f35c0a18f53f12d539124180f3944e5d703c0a15c1c7abfe8b29a19f32->enter($__internal_380a83f35c0a18f53f12d539124180f3944e5d703c0a15c1c7abfe8b29a19f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_380a83f35c0a18f53f12d539124180f3944e5d703c0a15c1c7abfe8b29a19f32->leave($__internal_380a83f35c0a18f53f12d539124180f3944e5d703c0a15c1c7abfe8b29a19f32_prof);

        
        $__internal_43648d85f3f5fb7cebaf51ca2e5e245d29f13ea85bde51a7c87f9c20a186efc4->leave($__internal_43648d85f3f5fb7cebaf51ca2e5e245d29f13ea85bde51a7c87f9c20a186efc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
