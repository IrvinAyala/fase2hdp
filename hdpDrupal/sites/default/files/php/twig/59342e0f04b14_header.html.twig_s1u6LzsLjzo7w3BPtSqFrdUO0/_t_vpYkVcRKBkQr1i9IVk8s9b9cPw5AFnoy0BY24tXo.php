<?php

/* themes/easy_news/templates/includes/header.html.twig */
class __TwigTemplate_cac275c470fee8619f2f1ca1058ed5489d3ea0a9a36bda3fd1d96607d4617316 extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"easy-news-header uk-container uk-container-center uk-responsive-width\" role=\"banner\">
  <div class=\"uk-grid uk-container-center uk-responsive-width uk-margin-top\">
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 5
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 9
        echo "    </div>
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 11
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_ad", array())) {
            // line 12
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_ad", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 16
        echo "    </div>
  </div>
</div>

<div class=\"easy-news-main-menu uk-container uk-container-center uk-responsive-width\">
  <div class=\"uk-grid uk-responsive-width uk-visible-large\">
    <div class=\"uk-width-1-1\">
      <nav class=\"uk-navbar uk-responsive-width\" role=\"navigation\">
        <div class=\"uk-float-right\">
        ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icons", array())) {
            // line 26
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icons", array()), "html", null, true));
            echo "
        ";
        }
        // line 28
        echo "        </div>
        <div class=\"uk-float-left\">
        ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 31
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 33
        echo "        </div>
      </nav>
    </div>
  </div>    
  <div class=\"uk-hidden-large\">
    <nav class=\"uk-navbar\" role=\"navigation\">
    ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 40
            echo "      <a href=\"#offcanvas\" class=\"uk-navbar-toggle\" data-uk-offcanvas=\"{mode:'slide'}\"></a>
      <div class=\"uk-offcanvas-bar\">
        ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 45
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icons", array())) {
            // line 46
            echo "      <div class=\"uk-margin-small-top uk-align-right uk-margin-right\">
        ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icons", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 50
        echo "    </nav>
  </div>
  
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  131 => 47,  128 => 46,  125 => 45,  119 => 42,  115 => 40,  113 => 39,  105 => 33,  99 => 31,  97 => 30,  93 => 28,  87 => 26,  85 => 25,  74 => 16,  68 => 13,  65 => 12,  63 => 11,  59 => 9,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"easy-news-header uk-container uk-container-center uk-responsive-width\" role=\"banner\">
  <div class=\"uk-grid uk-container-center uk-responsive-width uk-margin-top\">
    <div class=\"uk-width-medium-1-2\">
    {% if page.branding %}
      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        {{ page.branding }}
      </div>
    {% endif %}
    </div>
    <div class=\"uk-width-medium-1-2\">
    {% if page.header_ad %}
      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        {{ page.header_ad }}
      </div>
    {% endif %}
    </div>
  </div>
</div>

<div class=\"easy-news-main-menu uk-container uk-container-center uk-responsive-width\">
  <div class=\"uk-grid uk-responsive-width uk-visible-large\">
    <div class=\"uk-width-1-1\">
      <nav class=\"uk-navbar uk-responsive-width\" role=\"navigation\">
        <div class=\"uk-float-right\">
        {% if page.social_icons %}
          {{ page.social_icons }}
        {% endif %}
        </div>
        <div class=\"uk-float-left\">
        {% if page.main_menu %}
          {{ page.main_menu }}
        {% endif %}
        </div>
      </nav>
    </div>
  </div>    
  <div class=\"uk-hidden-large\">
    <nav class=\"uk-navbar\" role=\"navigation\">
    {% if page.main_menu %}
      <a href=\"#offcanvas\" class=\"uk-navbar-toggle\" data-uk-offcanvas=\"{mode:'slide'}\"></a>
      <div class=\"uk-offcanvas-bar\">
        {{ page.main_menu }}
      </div>
    {% endif %}
    {% if page.social_icons %}
      <div class=\"uk-margin-small-top uk-align-right uk-margin-right\">
        {{ page.social_icons }}
      </div>
    {% endif %}
    </nav>
  </div>
  
</div>

";
    }
}
