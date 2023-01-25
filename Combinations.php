class Solution {

    private $k;
    private $n;

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $this->k     = $k;
        $this->n     = $n;
        $comb = [];
        $start = 1;
        $this->backtrack($start, $res, $comb );

        return $res;        
    }



    function backtrack($start, &$res, $comb )
    {
        if ( count( $comb ) == $this->k )
        {
            $res[] = $comb;

            return;
        }

        for ( $i =$start; $i <= $this->n; $i++ )
        {
                $comb[] = $i;
                $this->backtrack($i+1, $res, $comb);
                array_pop( $comb );     
        }
    }
}