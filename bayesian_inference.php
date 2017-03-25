<?php
/*
    P(H|E) = P(E|H) * P(H) / P(E)

    P(H|E), result of the function, the posterior probability, is the probability of  H, after E is observed.
    P(E|H), $peh, is the probability of observing E given H. It indicates the compatibility of the evidence with the given hypothesis.
    P(H), $ph, the prior probability, is the estimate of the probability of the hypothesis H
    P(E), $pe, is the marginal likelihood.
*/
function get_posterior_probability($peh, $ph, $pe) {
    return $peh * $ph / $pe;
}

?>