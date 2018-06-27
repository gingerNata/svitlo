<?php

/* themes/custom/showcase_lite/templates/page.html.twig */
class __TwigTemplate_afd4168a2a53c1f9dbfa5c018bbb398546169fed6723b3d0a2f39768e8e4a4a9 extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 75
        if (($this->getAttribute(($context["page"] ?? null), "slideout", array()) &&  !($context["is_front"] ?? null))) {
            // line 76
            echo "  ";
            // line 77
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
    ";
            // line 79
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideout", array()), "html", null, true));
            echo "
      </div>
    </div>
    ";
            // line 85
            echo "  </div>
  ";
            // line 87
            echo "
  ";
            // line 89
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 92
        echo "
";
        // line 94
        echo "<div class=\"page-container\">

  ";
        // line 96
        if ( !($context["is_front"] ?? null)) {
            // line 97
            echo "
  ";
            // line 98
            if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 99
                echo "    ";
                // line 100
                echo "    <div class=\"header-container\">

      ";
                // line 102
                if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                    // line 103
                    echo "        ";
                    // line 104
                    echo "        <div class=\"clearfix header-top-highlighted ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                    echo "\">
          <div class=\"";
                    // line 105
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                    echo "\">
            ";
                    // line 107
                    echo "            <div class=\"clearfix header-top-highlighted__container";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                    echo "\"
              ";
                    // line 108
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 109
                        echo "                data-animate-effect=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                        echo "\"
              ";
                    }
                    // line 110
                    echo ">
              <div class=\"row\">
                ";
                    // line 112
                    if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                        // line 113
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 115
                        echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                        // line 116
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 119
                        echo "                  </div>
                ";
                    }
                    // line 121
                    echo "                ";
                    if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                        // line 122
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 124
                        echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                        // line 125
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 128
                        echo "                  </div>
                ";
                    }
                    // line 130
                    echo "              </div>
            </div>
            ";
                    // line 133
                    echo "          </div>
        </div>
        ";
                    // line 136
                    echo "      ";
                }
                // line 137
                echo "
      ";
                // line 138
                if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                    // line 139
                    echo "        ";
                    // line 140
                    echo "        <div class=\"clearfix header-top ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                    echo "\">
          <div class=\"";
                    // line 141
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                    echo "\">
            ";
                    // line 143
                    echo "            <div class=\"clearfix header-top__container";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                    echo "\"
              ";
                    // line 144
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 145
                        echo "                data-animate-effect=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                        echo "\"
              ";
                    }
                    // line 146
                    echo ">
              <div class=\"row\">
                ";
                    // line 148
                    if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                        // line 149
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 151
                        echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                        // line 152
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 155
                        echo "                  </div>
                ";
                    }
                    // line 157
                    echo "                ";
                    if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                        // line 158
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 160
                        echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                        // line 161
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 164
                        echo "                  </div>
                ";
                    }
                    // line 166
                    echo "              </div>
            </div>
            ";
                    // line 169
                    echo "          </div>
        </div>
        ";
                    // line 172
                    echo "      ";
                }
                // line 173
                echo "
      ";
                // line 174
                if ((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array()))) {
                    // line 175
                    echo "        ";
                    // line 176
                    echo "        <header role=\"banner\" class=\"clearfix header ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                    echo "\">
          <div class=\"";
                    // line 177
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                    echo "\">
            ";
                    // line 179
                    echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                    // line 181
                    if ($this->getAttribute(($context["page"] ?? null), "header_third", array())) {
                        // line 182
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 184
                        echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                        // line 185
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 188
                        echo "                  </div>
                ";
                    }
                    // line 190
                    echo "                ";
                    if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                        // line 191
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 193
                        echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                        // line 194
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 197
                        echo "                  </div>
                ";
                    }
                    // line 199
                    echo "                ";
                    if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                        // line 200
                        echo "                  <div class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                        echo "\">
                    ";
                        // line 202
                        echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                        // line 203
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                        echo "
                    </div>
                    ";
                        // line 206
                        echo "                  </div>
                ";
                    }
                    // line 208
                    echo "              </div>
            </div>
            ";
                    // line 211
                    echo "          </div>
          ";
                    // line 212
                    if ((($context["post_progress_status"] ?? null) == "enabled")) {
                        // line 213
                        echo "            ";
                        // line 214
                        echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                        // line 218
                        echo "          ";
                    }
                    // line 219
                    echo "        </header>
        ";
                    // line 221
                    echo "      ";
                }
                // line 222
                echo "
    </div>
    ";
                // line 225
                echo "  ";
            }
            // line 226
            echo "
  ";
        }
        // line 228
        echo "
  ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 230
            echo "    ";
            // line 231
            echo "    <div class=\"clearfix banner ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 232
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 234
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 244
            echo "      </div>
    </div>
    ";
            // line 247
            echo "  ";
        }
        // line 248
        echo "
  ";
        // line 250
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 252
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 253
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 257
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 263
        echo "
  ";
        // line 264
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 265
            echo "    ";
            // line 266
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 267
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 269
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 270
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 271
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 272
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 276
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 282
            echo "      </div>
    </div>
    ";
            // line 285
            echo "  ";
        }
        // line 286
        echo "
  ";
        // line 287
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array())) {
            // line 288
            echo "    ";
            // line 289
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 290
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 292
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 293
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 294
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 295
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 299
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 305
            echo "      </div>
    </div>
    ";
            // line 308
            echo "  ";
        }
        // line 309
        echo "
  ";
        // line 310
        if (($this->getAttribute(($context["page"] ?? null), "media_background_first", array()) || $this->getAttribute(($context["page"] ?? null), "media_background_second", array()))) {
            // line 311
            echo "    ";
            // line 312
            echo "    <div class=\"clearfix media-background ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["media_background_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["media_background_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      ";
            // line 314
            echo "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 316
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 318
            echo "        <div class=\"clearfix media-background__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 319
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 320
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 321
            echo ">
          <div class=\"row\">
            ";
            // line 323
            if ($this->getAttribute(($context["page"] ?? null), "media_background_first", array())) {
                // line 324
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 326
                echo "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 327
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "media_background_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 330
                echo "              </div>
            ";
            }
            // line 332
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "media_background_second", array())) {
                // line 333
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 335
                echo "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "media_background_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 339
                echo "              </div>
            ";
            }
            // line 341
            echo "          </div>
        </div>
        ";
            // line 344
            echo "      </div>
    </div>
    ";
            // line 347
            echo "  ";
        }
        // line 348
        echo "
  ";
        // line 350
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 354
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">
            ";
        // line 356
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\"
              ";
        // line 357
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 358
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\"
              ";
        }
        // line 359
        echo ">
              ";
        // line 360
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 361
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 363
        echo "            </div>
            ";
        // line 365
        echo "          </section>
          ";
        // line 366
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 367
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 369
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 370
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 371
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 372
            echo ">
                ";
            // line 373
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 376
            echo "            </aside>
          ";
        }
        // line 378
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 379
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 381
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 382
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 383
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 384
            echo ">
                ";
            // line 385
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 388
            echo "            </aside>
          ";
        }
        // line 390
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 395
        echo "
  ";
        // line 396
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()))) {
            // line 397
            echo "    ";
            // line 398
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 399
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 401
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 402
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 403
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 404
            echo ">
          <div class=\"row\">
            ";
            // line 406
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array())) {
                // line 407
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 409
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 410
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 413
                echo "              </div>
            ";
            }
            // line 415
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", array())) {
                // line 416
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 418
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 419
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 422
                echo "              </div>
            ";
            }
            // line 424
            echo "          </div>
        </div>
        ";
            // line 427
            echo "      </div>
    </div>
    ";
            // line 430
            echo "  ";
        }
        // line 431
        echo "
  ";
        // line 432
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 433
            echo "    ";
            // line 434
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 435
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 437
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 438
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 439
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 440
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 444
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 450
            echo "      </div>
    </div>
    ";
            // line 453
            echo "  ";
        }
        // line 454
        echo "
  ";
        // line 455
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 456
            echo "    ";
            // line 457
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 458
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 460
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 461
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 462
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 463
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 467
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 473
            echo "      </div>
    </div>
    ";
            // line 476
            echo "  ";
        }
        // line 477
        echo "
  ";
        // line 478
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 479
            echo "    ";
            // line 480
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 481
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 483
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 484
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 485
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 486
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 490
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 496
            echo "      </div>
    </div>
    ";
            // line 499
            echo "  ";
        }
        // line 500
        echo "
  ";
        // line 501
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 502
            echo "    ";
            // line 503
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 504
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 506
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 507
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 508
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 509
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 513
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 519
            echo "      </div>
    </div>
    ";
            // line 522
            echo "  ";
        }
        // line 523
        echo "
  ";
        // line 524
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 525
            echo "    ";
            // line 526
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 527
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 529
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 530
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 531
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 532
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 536
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 542
            echo "      </div>
    </div>
    ";
            // line 545
            echo "  ";
        }
        // line 546
        echo "
  ";
        // line 547
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 548
            echo "    ";
            // line 549
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 550
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 552
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 553
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 554
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 555
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 559
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 565
            echo "      </div>
    </div>
    ";
            // line 568
            echo "  ";
        }
        // line 569
        echo "
  ";
        // line 570
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()))) {
            // line 571
            echo "    ";
            // line 572
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 573
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 575
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 576
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 577
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 578
            echo ">
          <div class=\"row\">
            ";
            // line 580
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", array())) {
                // line 581
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 583
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 584
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 587
                echo "              </div>
            ";
            }
            // line 589
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", array())) {
                // line 590
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 592
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 593
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 596
                echo "              </div>
            ";
            }
            // line 598
            echo "          </div>
        </div>
        ";
            // line 601
            echo "      </div>
    </div>
    ";
            // line 604
            echo "  ";
        }
        // line 605
        echo "
  ";
        // line 606
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()))) {
            // line 607
            echo "    ";
            // line 608
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      ";
            // line 609
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 610
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
                echo "\"></i></div>
      ";
            }
            // line 612
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 615
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 616
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 618
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 619
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 620
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 621
                echo ">
                  ";
                // line 622
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 625
                echo "              </div>
            ";
            }
            // line 627
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 628
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 630
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 631
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 632
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 633
                echo ">
                  ";
                // line 634
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 637
                echo "              </div>
            ";
            }
            // line 639
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 640
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 641
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 643
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 644
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 645
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 646
                echo ">
                  ";
                // line 647
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 650
                echo "              </div>
            ";
            }
            // line 652
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 653
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 654
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 656
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 657
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 658
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 659
                echo ">
                  ";
                // line 660
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 663
                echo "              </div>
            ";
            }
            // line 665
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                // line 666
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 668
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 669
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 670
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 671
                echo ">
                  ";
                // line 672
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 675
                echo "              </div>
            ";
            }
            // line 677
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 682
            echo "  ";
        }
        // line 683
        echo "
  ";
        // line 684
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 685
            echo "    ";
            // line 686
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      ";
            // line 687
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 688
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
                echo "\"></i></div>
      ";
            }
            // line 690
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 692
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 696
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 702
            echo "      </div>
    </div>
    ";
            // line 705
            echo "  ";
        }
        // line 706
        echo "
  ";
        // line 707
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 708
            echo "    ";
            // line 709
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      ";
            // line 710
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 711
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
                echo "\"></i></div>
      ";
            }
            // line 713
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 715
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 717
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array())) {
                // line 718
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 720
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 721
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 724
                echo "              </div>
            ";
            }
            // line 726
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 727
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 729
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 730
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 733
                echo "              </div>
            ";
            }
            // line 735
            echo "          </div>
        </div>
        ";
            // line 738
            echo "      </div>
    </div>
    ";
            // line 741
            echo "  ";
        }
        // line 742
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/showcase_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1617 => 742,  1614 => 741,  1610 => 738,  1606 => 735,  1602 => 733,  1597 => 730,  1594 => 729,  1589 => 727,  1586 => 726,  1582 => 724,  1577 => 721,  1574 => 720,  1569 => 718,  1567 => 717,  1563 => 715,  1558 => 713,  1552 => 711,  1550 => 710,  1539 => 709,  1537 => 708,  1535 => 707,  1532 => 706,  1529 => 705,  1525 => 702,  1517 => 696,  1511 => 692,  1506 => 690,  1500 => 688,  1498 => 687,  1487 => 686,  1485 => 685,  1483 => 684,  1480 => 683,  1477 => 682,  1471 => 677,  1467 => 675,  1462 => 672,  1459 => 671,  1453 => 670,  1451 => 669,  1446 => 668,  1441 => 666,  1438 => 665,  1434 => 663,  1429 => 660,  1426 => 659,  1420 => 658,  1418 => 657,  1413 => 656,  1408 => 654,  1406 => 653,  1399 => 652,  1395 => 650,  1390 => 647,  1387 => 646,  1381 => 645,  1379 => 644,  1374 => 643,  1369 => 641,  1367 => 640,  1362 => 639,  1358 => 637,  1353 => 634,  1350 => 633,  1344 => 632,  1342 => 631,  1337 => 630,  1332 => 628,  1329 => 627,  1325 => 625,  1320 => 622,  1317 => 621,  1311 => 620,  1309 => 619,  1304 => 618,  1299 => 616,  1297 => 615,  1290 => 612,  1284 => 610,  1282 => 609,  1271 => 608,  1269 => 607,  1267 => 606,  1264 => 605,  1261 => 604,  1257 => 601,  1253 => 598,  1249 => 596,  1244 => 593,  1241 => 592,  1236 => 590,  1233 => 589,  1229 => 587,  1224 => 584,  1221 => 583,  1216 => 581,  1214 => 580,  1210 => 578,  1204 => 577,  1202 => 576,  1197 => 575,  1193 => 573,  1182 => 572,  1180 => 571,  1178 => 570,  1175 => 569,  1172 => 568,  1168 => 565,  1160 => 559,  1154 => 555,  1148 => 554,  1146 => 553,  1141 => 552,  1137 => 550,  1128 => 549,  1126 => 548,  1124 => 547,  1121 => 546,  1118 => 545,  1114 => 542,  1106 => 536,  1100 => 532,  1094 => 531,  1092 => 530,  1087 => 529,  1083 => 527,  1074 => 526,  1072 => 525,  1070 => 524,  1067 => 523,  1064 => 522,  1060 => 519,  1052 => 513,  1046 => 509,  1040 => 508,  1038 => 507,  1033 => 506,  1029 => 504,  1020 => 503,  1018 => 502,  1016 => 501,  1013 => 500,  1010 => 499,  1006 => 496,  998 => 490,  992 => 486,  986 => 485,  984 => 484,  979 => 483,  975 => 481,  966 => 480,  964 => 479,  962 => 478,  959 => 477,  956 => 476,  952 => 473,  944 => 467,  938 => 463,  932 => 462,  930 => 461,  925 => 460,  921 => 458,  912 => 457,  910 => 456,  908 => 455,  905 => 454,  902 => 453,  898 => 450,  890 => 444,  884 => 440,  878 => 439,  876 => 438,  871 => 437,  867 => 435,  858 => 434,  856 => 433,  854 => 432,  851 => 431,  848 => 430,  844 => 427,  840 => 424,  836 => 422,  831 => 419,  828 => 418,  823 => 416,  820 => 415,  816 => 413,  811 => 410,  808 => 409,  803 => 407,  801 => 406,  797 => 404,  791 => 403,  789 => 402,  784 => 401,  780 => 399,  771 => 398,  769 => 397,  767 => 396,  764 => 395,  758 => 390,  754 => 388,  749 => 385,  746 => 384,  740 => 383,  738 => 382,  731 => 381,  726 => 379,  723 => 378,  719 => 376,  714 => 373,  711 => 372,  705 => 371,  703 => 370,  696 => 369,  691 => 367,  689 => 366,  686 => 365,  683 => 363,  677 => 361,  675 => 360,  672 => 359,  666 => 358,  664 => 357,  657 => 356,  653 => 354,  645 => 350,  642 => 348,  639 => 347,  635 => 344,  631 => 341,  627 => 339,  622 => 336,  619 => 335,  614 => 333,  611 => 332,  607 => 330,  602 => 327,  599 => 326,  594 => 324,  592 => 323,  588 => 321,  582 => 320,  580 => 319,  575 => 318,  570 => 316,  567 => 314,  558 => 312,  556 => 311,  554 => 310,  551 => 309,  548 => 308,  544 => 305,  536 => 299,  530 => 295,  524 => 294,  522 => 293,  517 => 292,  513 => 290,  504 => 289,  502 => 288,  500 => 287,  497 => 286,  494 => 285,  490 => 282,  482 => 276,  476 => 272,  470 => 271,  468 => 270,  463 => 269,  459 => 267,  452 => 266,  450 => 265,  448 => 264,  445 => 263,  436 => 257,  430 => 253,  428 => 252,  424 => 250,  421 => 248,  418 => 247,  414 => 244,  406 => 238,  400 => 234,  396 => 232,  389 => 231,  387 => 230,  385 => 229,  382 => 228,  378 => 226,  375 => 225,  371 => 222,  368 => 221,  365 => 219,  362 => 218,  357 => 214,  355 => 213,  353 => 212,  350 => 211,  346 => 208,  342 => 206,  337 => 203,  334 => 202,  329 => 200,  326 => 199,  322 => 197,  317 => 194,  314 => 193,  309 => 191,  306 => 190,  302 => 188,  297 => 185,  294 => 184,  289 => 182,  287 => 181,  283 => 179,  279 => 177,  268 => 176,  266 => 175,  264 => 174,  261 => 173,  258 => 172,  254 => 169,  250 => 166,  246 => 164,  241 => 161,  238 => 160,  233 => 158,  230 => 157,  226 => 155,  221 => 152,  218 => 151,  213 => 149,  211 => 148,  207 => 146,  201 => 145,  199 => 144,  194 => 143,  190 => 141,  183 => 140,  181 => 139,  179 => 138,  176 => 137,  173 => 136,  169 => 133,  165 => 130,  161 => 128,  156 => 125,  153 => 124,  148 => 122,  145 => 121,  141 => 119,  136 => 116,  133 => 115,  128 => 113,  126 => 112,  122 => 110,  116 => 109,  114 => 108,  109 => 107,  105 => 105,  98 => 104,  96 => 103,  94 => 102,  90 => 100,  88 => 99,  86 => 98,  83 => 97,  81 => 96,  77 => 94,  74 => 92,  70 => 89,  67 => 87,  64 => 85,  58 => 81,  54 => 79,  47 => 77,  45 => 76,  43 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Showcase Lite's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
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

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.slideout: Items for the Slideout region.
 * - page.header_top_highlighted_first: Items for the Header Top Highlighted First region.
 * - page.header_top_highlighted_second: Items for the Header Top Highlighted Second region.
 * - page.header_top_first: Items for the Header Top First region.
 * - page.header_top_second: Items for the Header Top Second region.
 * - page.header_first: Items for the Header First region.
 * - page.header: Items for the Header Second region.
 * - page.header_third: Items for the Header Third region.
 * - page.banner: Items for the Banner region.
 * - page.content_top: Items for the Content Top region.
 * - page.content_top_highlighted: Items for the Content Top Highlighted region.
 * - page.content: Items for the Content region.
 * - page.sidebar_first: Items for the First Sidebar region.
 * - page.sidebar_second: Items for the Second Sidebar region.
 * - page.content_bottom_first: Items for the Content Bottom First region.
 * - page.content_bottom_second: Items for the Content Bottom Second region.
 * - page.featured_top: Items for the Featured Top region.
 * - page.featured: Items for the Featured region.
 * - page.featured_bottom: Items for the Featured Bottom region.
 * - page.sub_featured: Items for the Sub Featured region.
 * - page.breadcrumb: Items for the Breadcrumb region.
 * - page.highlighted: Items for the Highlighted region.
 * - page.media_background_first: Items for the Highlighted Bottom First region.
 * - page.media_background_second: Items for the Highlighted Bottom Second region.
 * - page.footer_top_first: Items for the Footer Top First region.
 * - page.footer_top_second: Items for the Footer Top Second region.
 * - page.footer_first: Items for the Footer First region.
 * - page.footer_second: Items for the Footer Second region.
 * - page.footer_third: Items for the Footer Third region.
 * - page.footer_fourth: Items for the Footer Fourth region.
 * - page.footer_fifth: Items for the Footer Fifth region.
 * - page.footer_bottom: Items for the Footer Bottom region.
 * - page.sub_footer_first: Items for the Subfooter First region.
 * - page.footer: Items for the Subfooter Second region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% if page.slideout and not is_front %}
  {# slideout #}
  <div class=\"clearfix slideout {{ slideout_background_color }}{{ (slideout_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (slideout_region_paddings) ? ' region--no-paddings' : '' }}\">
    {# slideout__container #}
    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        {{ page.slideout }}
      </div>
    </div>
    {# EOF:slideout__container #}
  </div>
  {# EOF: slideout #}

  {# EOF: slideout-toggle #}
  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  {# EOF: slideout-toggle #}
{% endif %}

{# page-container #}
<div class=\"page-container\">

  {% if not is_front %}

  {% if page.header_top_first or page.header_top_second or page.header_first or page.header or page.header_third or page.header_top_highlighted_first or page.header_top_highlighted_second %}
    {# header-container #}
    <div class=\"header-container\">

      {% if page.header_top_highlighted_first or page.header_top_highlighted_second %}
        {# header_top_highlighted #}
        <div class=\"clearfix header-top-highlighted {{ header_top_highlighted_background_color }}{{ (header_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_highlighted_layout_container }}\">
            {# header_top_highlighted__container #}
            <div class=\"clearfix header-top-highlighted__container{{ (header_top_highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
              {% if header_top_highlighted_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_highlighted_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_highlighted_first %}
                  <div class=\"{{ header_top_highlighted_first_grid_class }}\">
                    {# header-top-highlighted-first #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      {{ page.header_top_highlighted_first }}
                    </div>
                    {# EOF:header-top-highlighted-first #}
                  </div>
                {% endif %}
                {% if page.header_top_highlighted_second %}
                  <div class=\"{{ header_top_highlighted_second_grid_class }}\">
                    {# header-top-highlighted-second #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      {{ page.header_top_highlighted_second }}
                    </div>
                    {# EOF:header-top-highlighted-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF:header-top-highlighted__container #}
          </div>
        </div>
        {# EOF: header-top-highlighted #}
      {% endif %}

      {% if page.header_top_first or page.header_top_second %}
        {# header-top #}
        <div class=\"clearfix header-top {{ header_top_background_color }}{{ (header_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_layout_container }}\">
            {# header-top__container #}
            <div class=\"clearfix header-top__container{{ (header_top_animations == \"enabled\") ? ' fade' : '' }}\"
              {% if header_top_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_first %}
                  <div class=\"{{ header_top_first_grid_class }}\">
                    {# header-top-first #}
                    <div class=\"clearfix header-top__section header-top-first\">
                      {{ page.header_top_first }}
                    </div>
                    {# EOF:header-top-first #}
                  </div>
                {% endif %}
                {% if page.header_top_second %}
                  <div class=\"{{ header_top_second_grid_class }}\">
                    {# header-top-second #}
                    <div class=\"clearfix header-top__section header-top-second\">
                      {{ page.header_top_second }}
                    </div>
                    {# EOF:header-top-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header-top__container #}
          </div>
        </div>
        {# EOF: header-top #}
      {% endif %}

      {% if page.header_first or page.header or page.header_third %}
        {# header #}
        <header role=\"banner\" class=\"clearfix header {{ header_background_color }} {{ header_layout_container_class }} {{ header_layout_columns_class }}{{ (header_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_layout_container }}\">
            {# header__container #}
            <div class=\"clearfix header__container\">
              <div class=\"row\">
                {% if page.header_third %}
                  <div class=\"{{ header_third_grid_class }}\">
                    {# header-third #}
                    <div class=\"clearfix header__section header-third\">
                      {{ page.header_third }}
                    </div>
                    {# EOF:header-third #}
                  </div>
                {% endif %}
                {% if page.header_first %}
                  <div class=\"{{ header_first_grid_class }}\">
                    {# header-first #}
                    <div class=\"clearfix header__section header-first\">
                      {{ page.header_first }}
                    </div>
                    {# EOF:header-first #}
                  </div>
                {% endif %}
                {% if page.header %}
                  <div class=\"{{ header_second_grid_class }}\">
                    {# header-second #}
                    <div class=\"clearfix header__section header-second\">
                      {{ page.header }}
                    </div>
                    {# EOF:header-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header__container #}
          </div>
          {% if post_progress_status == \"enabled\" %}
            {# post-progress #}
            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            {# EOF: post-progress #}
          {% endif %}
        </header>
        {# EOF: header #}
      {% endif %}

    </div>
    {# EOF: header-container #}
  {% endif %}

  {% endif %}

  {% if page.banner %}
    {# banner #}
    <div class=\"clearfix banner {{ banner_background_color }}{{ (banner_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (banner_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ banner_layout_container }}\">
        {# banner__container #}
        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                {{ page.banner }}
              </div>
            </div>
          </div>
        </div>
        {# EOF: banner__container #}
      </div>
    </div>
    {# EOF:banner #}
  {% endif %}

  {# page-start #}
  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  {% if page.system_messages %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.system_messages }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.content_top %}
    {# content-top #}
    <div class=\"clearfix content-top {{ content_top_background_color }}{{ (content_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_layout_container }}\">
        {# content-top__container #}
        <div class=\"clearfix content-top__container{{ (content_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                {{ page.content_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top__container #}
      </div>
    </div>
    {# EOF: content-top #}
  {% endif %}

  {% if page.content_top_highlighted %}
    {# content-top-highlighted #}
    <div class=\"clearfix content-top-highlighted {{ content_top_highlighted_background_color }} {{ content_top_highlighted_separator }}{{ (content_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_highlighted_layout_container }}\">
        {# content-top-highlighted__container #}
        <div class=\"clearfix content-top-highlighted__container{{ (content_top_highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_top_highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                {{ page.content_top_highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top-highlighted__container #}
      </div>
    </div>
    {# EOF: content-top-highlighted #}
  {% endif %}

  {% if page.media_background_first or page.media_background_second %}
    {# media-background #}
    <div class=\"clearfix media-background {{ media_background_background_color }} {{ media_background_separator }}{{ (media_background_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (media_background_region_paddings) ? ' region--no-paddings' : '' }}\">
      {# media-background-transparent-bg #}
      <div class=\"media-background-transparent-bg\"></div>
      {# EOF:media-background-transparent-bg #}
      <div class=\"{{ media_background_layout_container }}\">
        {# media-background__container #}
        <div class=\"clearfix media-background__container{{ (media_background_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if media_background_animations == \"enabled\" %}
            data-animate-effect=\"{{ media_background_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.media_background_first %}
              <div class=\"{{ media_background_first_grid_class }}\">
                {# media-background-first #}
                <div class=\"clearfix media-background__section media-background-first\">
                  {{ page.media_background_first }}
                </div>
                {# EOF:media-background-first #}
              </div>
            {% endif %}
            {% if page.media_background_second %}
              <div class=\"{{ media_background_second_grid_class }}\">
                {# media-background-second #}
                <div class=\"clearfix media-background__section media-background-second\">
                  {{ page.media_background_second }}
                </div>
                {# EOF:media-background-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:media-background__container #}
      </div>
    </div>
    {# EOF: media-background #}
  {% endif %}

  {# main-content #}
  <div class=\"clearfix main-content region--dark-typography region--white-background  {{ main_content_separator }}\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"{{ main_grid_class }}\">
            {# main #}
            <div class=\"clearfix main-content__section{{ (main_content_animations == \"enabled\") ? ' fade' : '' }}{{ (main_content_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (main_content_region_paddings) ? ' region--no-paddings' : '' }}\"
              {% if main_content_animations == \"enabled\" %}
                data-animate-effect=\"{{ main_content_animation_effect }}\"
              {% endif %}>
              {% if page.content %}
                {{ page.content }}
              {% endif %}
            </div>
            {# EOF:main #}
          </section>
          {% if page.sidebar_first %}
            <aside class=\"{{ sidebar_first_grid_class }}\">
              {# sidebar-first #}
              <section class=\"sidebar__section sidebar-first clearfix{{ (sidebar_first_animations == \"enabled\") ? ' fade' : '' }}{{ (sidebar_first_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_first_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_first_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_first_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_first }}
              </section>
              {# EOF:sidebar-first #}
            </aside>
          {% endif %}
          {% if page.sidebar_second %}
            <aside class=\"{{ sidebar_second_grid_class }}\">
              {# sidebar-second #}
              <section class=\"sidebar__section sidebar-second clearfix{{ (sidebar_second_animations == \"enabled\") ? ' fade' : '' }}{{ (sidebar_second_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_second_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_second_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_second_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_second }}
              </section>
              {# EOF:sidebar-second #}
            </aside>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  {# EOF:main-content #}

  {% if page.content_bottom_first or page.content_bottom_second %}
    {# content-bottom #}
    <div class=\"clearfix content-bottom {{ content_bottom_background_color }} {{ content_bottom_separator }}{{ (content_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_bottom_layout_container }}\">
        {# content-bottom__container #}
        <div class=\"clearfix content-bottom__container{{ (content_bottom_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.content_bottom_first %}
              <div class=\"{{ content_bottom_first_grid_class }}\">
                {# content-bottom-first #}
                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  {{ page.content_bottom_first }}
                </div>
                {# EOF:content-bottom-first #}
              </div>
            {% endif %}
            {% if page.content_bottom_second %}
              <div class=\"{{ content_bottom_second_grid_class }}\">
                {# content-bottom-second #}
                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  {{ page.content_bottom_second }}
                </div>
                {# EOF:content-bottom-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:content-bottom__container #}
      </div>
    </div>
    {# EOF: content-bottom #}
  {% endif %}

  {% if page.featured_top %}
    {# featured-top #}
    <div class=\"clearfix featured-top {{ featured_top_background_color }} {{ featured_top_separator }}{{ (featured_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_top_layout_container }}\">
        {# featured-top__container #}
        <div class=\"clearfix featured-top__container{{ (featured_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                {{ page.featured_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-top__container #}
      </div>
    </div>
    {# EOF: featured-top #}
  {% endif %}

  {% if page.featured %}
    {# featured #}
    <div class=\"clearfix featured {{ featured_background_color }} {{ featured_separator }}{{ (featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_layout_container }}\">
        {# featured__container #}
        <div class=\"clearfix featured__container{{ (featured_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                {{ page.featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured__container #}
      </div>
    </div>
    {# EOF: featured #}
  {% endif %}

  {% if page.featured_bottom %}
    {# featured-bottom #}
    <div class=\"clearfix featured-bottom {{ featured_bottom_background_color }} {{ featured_bottom_separator }}{{ (featured_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_bottom_layout_container }}\">
        {# featured-bottom__container #}
        <div class=\"clearfix featured-bottom__container{{ (featured_bottom_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                {{ page.featured_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-bottom__container #}
      </div>
    </div>
    {# EOF: featured-bottom #}
  {% endif %}

  {% if page.sub_featured %}
    {# sub_featured #}
    <div class=\"clearfix sub-featured {{ sub_featured_background_color }} {{ sub_featured_separator }}{{ (sub_featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sub_featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ sub_featured_layout_container }}\">
        {# sub_featured__container #}
        <div class=\"clearfix sub-featured__container{{ (sub_featured_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if sub_featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ sub_featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                {{ page.sub_featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:sub_featured__container #}
      </div>
    </div>
    {# EOF: sub_featured #}
  {% endif %}

  {% if page.highlighted_top %}
    {# highlighted-top #}
    <div class=\"clearfix highlighted-top {{ highlighted_top_background_color }} {{ highlighted_top_separator }}{{ (highlighted_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_top_layout_container }}\">
        {# highlighted-top__container #}
        <div class=\"clearfix highlighted-top__container{{ (highlighted_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if highlighted_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                {{ page.highlighted_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted-top__container #}
      </div>
    </div>
    {# EOF: highlighted-top #}
  {% endif %}

  {% if page.highlighted %}
    {# highlighted #}
    <div class=\"clearfix highlighted {{ highlighted_background_color }} {{ highlighted_separator }}{{ (highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_layout_container }}\">
        {# highlighted__container #}
        <div class=\"clearfix highlighted__container{{ (highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                {{ page.highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted__container #}
      </div>
    </div>
    {# EOF: highlighted #}
  {% endif %}

  {% if page.footer_top_first or page.footer_top_second %}
    {# footer-top #}
    <div class=\"clearfix footer-top {{ footer_top_regions }} {{ footer_top_background_color }} {{ footer_top_separator }}{{ (footer_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_top_layout_container }}\">
        {# footer-top__container #}
        <div class=\"clearfix footer-top__container{{ (footer_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if footer_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ footer_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.footer_top_first %}
              <div class=\"{{ footer_top_first_grid_class }}\">
                {# footer-top-first #}
                <div class=\"clearfix footer-top__section footer-top-first\">
                  {{ page.footer_top_first }}
                </div>
                {# EOF:footer-top-first #}
              </div>
            {% endif %}
            {% if page.footer_top_second %}
              <div class=\"{{ footer_top_second_grid_class }}\">
                {# footer-top-second #}
                <div class=\"clearfix footer-top__section footer-top-second\">
                  {{ page.footer_top_second }}
                </div>
                {# EOF:footer-top-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: footer-top__container #}
      </div>
    </div>
    {# EOF: footer-top #}
  {% endif %}

  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth %}
    {# footer #}
    <footer class=\"clearfix footer {{ footer_background_color }} {{ footer_separator }} {{ scroll_to_top_region }}{{ (footer_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_region_paddings) ? ' region--no-paddings' : '' }}\">
      {% if scroll_to_top_display and scroll_to_top_region == \"footer-to-top-enabled\" %}
        <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
      {% endif %}
      <div class=\"{{ footer_layout_container }}\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            {% if page.footer_first %}
              <div class=\"{{ footer_first_grid_class }}\">
                {# footer-first #}
                <div class=\"clearfix footer__section footer-first{{ (footer_animations == \"enabled\") ? ' fade' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_first }}
                </div>
                {# EOF:footer-first #}
              </div>
            {% endif %}
            {% if page.footer_second %}
              <div class=\"{{ footer_second_grid_class }}\">
                {# footer-second #}
                <div class=\"clearfix footer__section footer-second{{ (footer_animations == \"enabled\") ? ' fade' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_second }}
                </div>
                {# EOF:footer-second #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_first }}\"></div>
            {% if page.footer_third %}
              <div class=\"{{ footer_third_grid_class }}\">
                {# footer-third #}
                <div class=\"clearfix footer__section footer-third{{ (footer_animations == \"enabled\") ? ' fade' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_third }}
                </div>
                {# EOF:footer-third #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_second }} {{ footer_5_columns_clearfix }}\"></div>
            {% if page.footer_fourth %}
              <div class=\"{{ footer_fourth_grid_class }}\">
                {# footer-fourth #}
                <div class=\"clearfix footer__section footer-fourth{{ (footer_animations == \"enabled\") ? ' fade' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fourth }}
                </div>
                {# EOF:footer-fourth #}
              </div>
            {% endif %}
            {% if page.footer_fifth %}
              <div class=\"{{ footer_fifth_grid_class }}\">
                {# footer-fifth #}
                <div class=\"clearfix footer__section footer-fifth{{ (footer_animations == \"enabled\") ? ' fade' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fifth }}
                </div>
                {# EOF:footer-fifth #}
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </footer>
    {# EOF footer #}
  {% endif %}

  {% if page.footer_bottom %}
    {# footer-bottom #}
    <div class=\"clearfix footer-bottom {{ footer_bottom_background_color }} {{ footer_bottom_separator }} {{ scroll_to_top_region }}{{ (footer_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      {% if scroll_to_top_display and scroll_to_top_region == \"footer-bottom-to-top-enabled\" %}
        <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
      {% endif %}
      <div class=\"{{ footer_bottom_layout_container }}\">
        {# footer-bottom__container #}
        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                {{ page.footer_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:footer-bottom__container #}
      </div>
    </div>
    {# EOF: footer-bottom #}
  {% endif %}

  {% if page.sub_footer_first or page.footer %}
    {# subfooter #}
    <div class=\"clearfix subfooter {{ subfooter_background_color }} {{ subfooter_separator }} {{ scroll_to_top_region }}{{ (subfooter_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (subfooter_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      {% if scroll_to_top_display and scroll_to_top_region == \"subfooter-to-top-enabled\" %}
        <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
      {% endif %}
      <div class=\"{{ subfooter_layout_container }}\">
        {# subfooter__container #}
        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            {% if page.sub_footer_first %}
              <div class=\"{{ subfooter_first_grid_class }}\">
                {# subfooter-first #}
                <div class=\"clearfix subfooter__section subfooter-first\">
                  {{ page.sub_footer_first }}
                </div>
                {# EOF: subfooter-first #}
              </div>
            {% endif %}
            {% if page.footer %}
              <div class=\"{{ subfooter_second_grid_class }}\">
                {# subfooter-second #}
                <div class=\"clearfix subfooter__section subfooter-second\">
                  {{ page.footer }}
                </div>
                {# EOF: subfooter-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: subfooter__container #}
      </div>
    </div>
    {# EOF:subfooter #}
  {% endif %}

</div>
{# EOF: page-container #}
", "themes/custom/showcase_lite/templates/page.html.twig", "/var/www/svitlo/web/themes/custom/showcase_lite/templates/page.html.twig");
    }
}
