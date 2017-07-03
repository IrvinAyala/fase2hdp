<?php

/* themes/uikitty/templates/components/container.html.twig */
class __TwigTemplate_4dc6c1dd903544fa2c73e9cce76ba33d6df36e911e7892277c94cee0031ab2e1 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/uikitty/templates/components/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 22,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override of a container used to wrap child elements.
 *
 * Used for grouped form items. Can also be used as a theme wrapper for any
 * renderable element, to surround it with a <div> and HTML attributes.
 * See \\Drupal\\Core\\Render\\Element\\RenderElement for more
 * information on the #theme_wrappers render array property, and
 * \\Drupal\\Core\\Render\\Element\\container for usage of the container render
 * element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - children: The rendered child elements of the container.
 * - has_parent: A flag to indicate that the container has one or more parent
     containers.
 *
 * @see template_preprocess_container()
 */
#}
{{ children }}
";
    }
}
