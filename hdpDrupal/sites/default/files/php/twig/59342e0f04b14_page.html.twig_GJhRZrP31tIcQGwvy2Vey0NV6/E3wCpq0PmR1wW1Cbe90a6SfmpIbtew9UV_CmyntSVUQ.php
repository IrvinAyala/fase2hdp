<?php

/* themes/business_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_5d9a16ae685b71a036e663d176cc6760438b4c8d15d09f5aed922a85359b364f extends Twig_Template
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
        $tags = array("if" => 67);
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

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 68
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 70
        echo "      </div>

      ";
        // line 72
        if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
            // line 73
            echo "        <div class=\"col-sm-8 col-md-9\">
          <div class=\"social-media\">
            ";
            // line 75
            if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 93
            echo "          </div>
        </div>
      ";
        }
        // line 96
        echo "
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button> 

        ";
        // line 114
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 115
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 117
        echo "      </nav>
    </div>
  </div>
</div>



<!-- Banner -->
  ";
        // line 125
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 134
        echo "  <!-- End Banner -->


<!--Highlighted-->
  ";
        // line 138
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 139
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 147
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 151
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 152
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 153
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 159
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 160
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 161
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 163
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 166
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 167
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 168
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 170
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 173
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 174
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 175
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 177
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 184
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 188
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 189
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 193
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 198
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 207
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 208
            echo "        <div class=\"row\">
          ";
            // line 209
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 212
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 216
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 221
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 222
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 223
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 224
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 228
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 231
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 232
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 233
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 234
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 238
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 241
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 242
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 243
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 244
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 248
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 254
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 255
            echo "      <div class=\"row\">
        ";
            // line 256
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 259
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->









<!-- start: Footer -->
";
        // line 273
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 274
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 280
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 281
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 282
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 284
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 288
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 289
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 290
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 292
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 296
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 297
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 298
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 300
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 306
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 309
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 310
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 314
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 321
        echo "<!-- End Footer Menu -->

";
        // line 323
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 324
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 330
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                echo "        
          <p>";
                // line 331
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>        
        ";
            }
            // line 333
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 337
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 338
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 342
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 348
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/business_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 348,  554 => 342,  548 => 338,  546 => 337,  540 => 333,  535 => 331,  531 => 330,  523 => 324,  521 => 323,  517 => 321,  507 => 314,  501 => 310,  499 => 309,  494 => 306,  486 => 300,  480 => 298,  478 => 297,  474 => 296,  468 => 292,  462 => 290,  460 => 289,  456 => 288,  450 => 284,  444 => 282,  442 => 281,  438 => 280,  430 => 274,  428 => 273,  412 => 259,  406 => 256,  403 => 255,  401 => 254,  393 => 248,  386 => 244,  382 => 243,  379 => 242,  377 => 241,  372 => 238,  365 => 234,  361 => 233,  358 => 232,  356 => 231,  351 => 228,  344 => 224,  340 => 223,  337 => 222,  335 => 221,  327 => 216,  321 => 212,  315 => 209,  312 => 208,  310 => 207,  299 => 198,  291 => 193,  285 => 189,  283 => 188,  277 => 184,  268 => 177,  262 => 175,  260 => 174,  256 => 173,  251 => 170,  245 => 168,  243 => 167,  239 => 166,  234 => 163,  228 => 161,  226 => 160,  222 => 159,  214 => 153,  212 => 152,  208 => 151,  202 => 147,  194 => 142,  189 => 139,  187 => 138,  181 => 134,  173 => 129,  166 => 125,  156 => 117,  150 => 115,  148 => 114,  128 => 96,  123 => 93,  117 => 91,  114 => 90,  108 => 88,  105 => 87,  99 => 85,  96 => 84,  90 => 82,  87 => 81,  81 => 79,  78 => 78,  72 => 76,  70 => 75,  66 => 73,  64 => 72,  60 => 70,  54 => 68,  52 => 67,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      {% if show_social_icon %}
        <div class=\"col-sm-8 col-md-9\">
          <div class=\"social-media\">
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </div>
        </div>
      {% endif %}

    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button> 

        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}
      </nav>
    </div>
  </div>
</div>



<!-- Banner -->
  {% if is_front and page.slideshow %}  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            {{ page.slideshow }}
        </div>
      </div>
    </div>
  {% endif %}
  <!-- End Banner -->


<!--Highlighted-->
  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Highlighted-->


<!-- Start Top Widget -->
{% if is_front %}  
  {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_first %}
              {{ page.topwidget_first }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_second %}
              {{ page.topwidget_second }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = {{ topwidget_third_class }}>
            {% if page.topwidget_third %}
              {{ page.topwidget_third }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}
<!--End Top Widget -->


<!-- Page Title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}
    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->

      <!--- Start content -->
      {% if page.content %}
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}
          </div>
        </div>
      {% endif %}
      <!---End content -->

      <!--- Start Right SideBar -->
      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    {% if page.content_bottom %}
      <div class=\"row\">
        {{ page.content_bottom }}
      </div>
    {% endif %}
    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->









<!-- start: Footer -->
{% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}
  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Footer -->

<!-- Start Footer Menu -->
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          {{ page.footer_menu }}
        </div>
        
      </div>
    </div>
  </div>
{% endif %}
<!-- End Footer Menu -->

{% if copyright_text or show_credit_link %}
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        {% if copyright_text %}        
          <p>{{copyright_text}}</p>        
        {% endif %}
      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}
      <!-- End Credit link -->
            
    </div>
  </div>
</div>
{% endif %}

";
    }
}
