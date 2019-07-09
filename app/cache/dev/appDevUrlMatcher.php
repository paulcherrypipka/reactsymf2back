<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // admin_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_admin_index:

        // admin_post_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_post_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_post_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_admin_post_index:

        // admin_post_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_new')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newAction',  '_locale' => 'en',));
        }
        not_admin_post_new:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::showAction',  '_locale' => 'en',));
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::editAction',  '_locale' => 'en',));
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/admin/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_admin_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::deleteAction',  '_locale' => 'en',));
        }
        not_admin_post_delete:

        // blog_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'en',));
        }

        // blog_index_paginated
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/page/(?P<page>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index_paginated')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'en',));
        }

        // blog_indexapi
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/indexapi(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_indexapi')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexApiAction',  '_locale' => 'en',));
        }

        // blog_countapi
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/count$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_countapi')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::countApiAction',  '_locale' => 'en',));
        }

        // blog_post
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/posts/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::postShowAction',  '_locale' => 'en',));
        }

        // comment_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/blog/comment/(?P<postSlug>[^/]++)/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_new')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::commentNewAction',  '_locale' => 'en',));
        }
        not_comment_new:

        // security_login_form
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login_form')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',));
        }

        // security_login_check
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login_check')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_locale' => 'en',));
        }

        // security_logout
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'default/homepage.html.twig',));
        }

        // lucky_number
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id)/lucky/number(?:/(?P<count>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lucky_number')), array (  '_controller' => 'TestBundle\\Controller\\LuckyController::numberAction',  'count' => 3,));
        }

        // api_lucky_number
        if (preg_match('#^/(?P<_locale>[^/]++)/api/lucky/number(?:/(?P<count>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_lucky_number')), array (  '_controller' => 'TestBundle\\Controller\\LuckyController::apiNumberAction',  'count' => 3,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
