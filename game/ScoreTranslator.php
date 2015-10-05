<?php

class ScoreTranslator {
    public function translate($player1Score, $player2Score) {
        $score =  new String($player1Score.'-'.$player2Score);
        return $score
            ->replace('0', 'Love')
            ->replace('1', 'Fifteen')
            ->replace('2', 'Thirty')
            ->replace('3', 'Forty')
            ->replace('Love-Love', 'Love-All')
            ->replace('Fifteen-Fifteen', 'Fifteen-All')
            ->replace('Thirty-Thirty', 'Thirty-All')
            ->replace('Forty-Forty', 'Deuce');
    }
}
