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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/game')) {
            // get_game_menu
            if (0 === strpos($pathinfo, '/game/menu') && preg_match('#^/game/menu(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_game_menu;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_game_menu')), array (  '_controller' => 'hangman.controller.game:getGameMenuAction',  '_format' => 'json',));
            }
            not_get_game_menu:

            if (0 === strpos($pathinfo, '/games')) {
                // get_game
                if (preg_match('#^/games/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_game;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_game')), array (  '_controller' => 'hangman.controller.game:getGameAction',  '_format' => 'json',));
                }
                not_get_game:

                // get_game_won
                if (preg_match('#^/games/(?P<id>[^/]++)/won(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_game_won;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_game_won')), array (  '_controller' => 'hangman.controller.game:getGameWonAction',  '_format' => 'json',));
                }
                not_get_game_won:

                // post_game
                if (preg_match('#^/games(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_game;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_game')), array (  '_controller' => 'hangman.controller.game:postGameAction',  '_format' => 'json',));
                }
                not_post_game:

            }

        }

        // post_wordlength
        if (0 === strpos($pathinfo, '/wordlengths') && preg_match('#^/wordlengths(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_wordlength;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_wordlength')), array (  '_controller' => 'hangman.controller.game:postWordlengthAction',  '_format' => 'json',));
        }
        not_post_wordlength:

        // post_letter
        if (0 === strpos($pathinfo, '/letters') && preg_match('#^/letters(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_letter;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_letter')), array (  '_controller' => 'hangman.controller.game:postLetterAction',  '_format' => 'json',));
        }
        not_post_letter:

        if (0 === strpos($pathinfo, '/stat')) {
            // post_state_of_letter
            if (0 === strpos($pathinfo, '/states/ofs/letters') && preg_match('#^/states/ofs/letters(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_state_of_letter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_state_of_letter')), array (  '_controller' => 'hangman.controller.game:postStateOfLetterAction',  '_format' => 'json',));
            }
            not_post_state_of_letter:

            // get_static_games
            if (0 === strpos($pathinfo, '/static/games') && preg_match('#^/static/games(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_static_games;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_static_games')), array (  '_controller' => 'hangman.controller.games_statics:getStaticGamesAction',  '_format' => 'json',));
            }
            not_get_static_games:

        }

        // get_game_static
        if (0 === strpos($pathinfo, '/games') && preg_match('#^/games/(?P<id>[^/]++)/static(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_game_static;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_game_static')), array (  '_controller' => 'hangman.controller.games_statics:getGameStaticAction',  '_format' => 'json',));
        }
        not_get_game_static:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
