<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // post_start_game
        if (0 === strpos($pathinfo, '/starts/games') && preg_match('#^/starts/games(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_start_game;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_start_game')), array (  '_controller' => 'hangman.game.controller:postStartGameAction',  '_format' => 'json',));
        }
        not_post_start_game:

        if (0 === strpos($pathinfo, '/letters')) {
            // post_letter
            if (preg_match('#^/letters(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_letter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_letter')), array (  '_controller' => 'hangman.game.controller:postLetterAction',  '_format' => 'json',));
            }
            not_post_letter:

            // get_letter_submitted
            if (preg_match('#^/letters/(?P<uuid>[^/]++)/submitted(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_letter_submitted;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_letter_submitted')), array (  '_controller' => 'hangman.game.controller:getLetterSubmittedAction',  '_format' => 'json',));
            }
            not_get_letter_submitted:

        }

        // post_wordlength
        if (0 === strpos($pathinfo, '/wordlengths') && preg_match('#^/wordlengths(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_wordlength;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_wordlength')), array (  '_controller' => 'hangman.game.controller:postWordlengthAction',  '_format' => 'json',));
        }
        not_post_wordlength:

        // get_overview
        if (0 === strpos($pathinfo, '/overview') && preg_match('#^/overview(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_overview;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_overview')), array (  '_controller' => 'hangman.game_statistics.controller:getOverviewAction',  '_format' => 'json',));
        }
        not_get_overview:

        // get_game_detail
        if (0 === strpos($pathinfo, '/games') && preg_match('#^/games/(?P<uuid>[^/]++)/detail(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_game_detail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_game_detail')), array (  '_controller' => 'hangman.game_statistics.controller:getGameDetailAction',  '_format' => 'json',));
        }
        not_get_game_detail:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
