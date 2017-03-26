<?php

final class BayesianInference {
    /*
        P(H|E) = P(E|H) * P(H) / P(E)

        P(H|E), result of the function, the posterior probability, is the probability of  H, after E is observed.
        P(E|H), $peh, is the probability of observing E given H. It indicates the compatibility of the evidence with the given hypothesis.
        P(H), $ph, the prior probability, is the estimate of the probability of the hypothesis H
        P(E), $pe, is the marginal likelihood.
    */
    public static function getPosteriorProbability($peh, $ph, $pe) {
        if ($peh < 0) {
            throw new InvalidArgumentException('$peh less than zero');
        } else if ($peh > 1) {
            throw new InvalidArgumentException('$peh more than one');
        } else if ($ph < 0) {
            throw new InvalidArgumentException('$ph less than zero');
        } else if ($ph > 1) {
            throw new InvalidArgumentException('$ph more than one');
        } else if ($pe < 0) {
            throw new InvalidArgumentException('$pe less than zero');
        } else if ($pe == 0) {
            throw new InvalidArgumentException('$pe is zero');
        } else if ($pe > 1) {
            throw new InvalidArgumentException('$pe more than one');
        }

        return $peh * $ph / $pe;
    }
}

?>