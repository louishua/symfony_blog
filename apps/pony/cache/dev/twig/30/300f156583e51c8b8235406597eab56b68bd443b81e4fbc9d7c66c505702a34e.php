<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_41f1e9e958fba67f4ecedc933b1a5e1281e5e16c716ddc9a3ada27dca21aa4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8895a0f28fe0aa3be6d1447b8b7a82357e67e1e027208906998f0b4208760b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8895a0f28fe0aa3be6d1447b8b7a82357e67e1e027208906998f0b4208760b4->enter($__internal_f8895a0f28fe0aa3be6d1447b8b7a82357e67e1e027208906998f0b4208760b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8895a0f28fe0aa3be6d1447b8b7a82357e67e1e027208906998f0b4208760b4->leave($__internal_f8895a0f28fe0aa3be6d1447b8b7a82357e67e1e027208906998f0b4208760b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adf823a0c1a058fdc3e3be012644cbc0ee50297eb83df3f71e4f30448288c516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf823a0c1a058fdc3e3be012644cbc0ee50297eb83df3f71e4f30448288c516->enter($__internal_adf823a0c1a058fdc3e3be012644cbc0ee50297eb83df3f71e4f30448288c516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_adf823a0c1a058fdc3e3be012644cbc0ee50297eb83df3f71e4f30448288c516->leave($__internal_adf823a0c1a058fdc3e3be012644cbc0ee50297eb83df3f71e4f30448288c516_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0e722a92694e0214c59e3587671810bf6f43963bb25151921f9bcf093b10201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e722a92694e0214c59e3587671810bf6f43963bb25151921f9bcf093b10201->enter($__internal_c0e722a92694e0214c59e3587671810bf6f43963bb25151921f9bcf093b10201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_c0e722a92694e0214c59e3587671810bf6f43963bb25151921f9bcf093b10201->leave($__internal_c0e722a92694e0214c59e3587671810bf6f43963bb25151921f9bcf093b10201_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_17ce8f45653fc38b7d203c799d3997903490b78628936d0469ded1ea0b37f386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ce8f45653fc38b7d203c799d3997903490b78628936d0469ded1ea0b37f386->enter($__internal_17ce8f45653fc38b7d203c799d3997903490b78628936d0469ded1ea0b37f386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_17ce8f45653fc38b7d203c799d3997903490b78628936d0469ded1ea0b37f386->leave($__internal_17ce8f45653fc38b7d203c799d3997903490b78628936d0469ded1ea0b37f386_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9a3d6d2fe9e051d06a155e51e8811408acdcda387d18834587244fdc1019318e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3d6d2fe9e051d06a155e51e8811408acdcda387d18834587244fdc1019318e->enter($__internal_9a3d6d2fe9e051d06a155e51e8811408acdcda387d18834587244fdc1019318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_9a3d6d2fe9e051d06a155e51e8811408acdcda387d18834587244fdc1019318e->leave($__internal_9a3d6d2fe9e051d06a155e51e8811408acdcda387d18834587244fdc1019318e_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_2a0a14b96be900a6a57ea87944964d59ce7c15435b71c00a78f60c38a39d435b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0a14b96be900a6a57ea87944964d59ce7c15435b71c00a78f60c38a39d435b->enter($__internal_2a0a14b96be900a6a57ea87944964d59ce7c15435b71c00a78f60c38a39d435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_2a0a14b96be900a6a57ea87944964d59ce7c15435b71c00a78f60c38a39d435b->leave($__internal_2a0a14b96be900a6a57ea87944964d59ce7c15435b71c00a78f60c38a39d435b_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_3726675f338942fe3acd80e54779f76459e00cb05e79508e087bd30a7220f71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3726675f338942fe3acd80e54779f76459e00cb05e79508e087bd30a7220f71a->enter($__internal_3726675f338942fe3acd80e54779f76459e00cb05e79508e087bd30a7220f71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3726675f338942fe3acd80e54779f76459e00cb05e79508e087bd30a7220f71a->leave($__internal_3726675f338942fe3acd80e54779f76459e00cb05e79508e087bd30a7220f71a_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/acmedemo/css/demo.css') }}\" />
{% endblock %}

{% block title 'Demo Bundle' %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"flash-message\">
            <em>Notice</em>: {{ flashMessage }}
        </div>
    {% endfor %}

    {% block content_header %}
        <ul id=\"menu\">
            {% block content_header_more %}
                <li><a href=\"{{ path('_demo') }}\">Demo Home</a></li>
            {% endblock %}
        </ul>

        <div style=\"clear: both\"></div>
    {% endblock %}

    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>

    {% if code is defined %}
        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">{{ code|raw }}</div>
        </div>
    {% endif %}
{% endblock %}
";
    }
}
