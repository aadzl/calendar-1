<?php

namespace Solution10\Calendar\Resolution;

use Solution10\Calendar\ResolutionInterface;
use Solution10\Calendar\Cell;

/**
 * Class Month
 *
 * The month resolution shows a calendar that arranges the weeks by row,
 * the days by column and can optionally show multiple months at once:
 *
 *  | M | T | W | T | F | S | S |
 *  | 1 | 2 | 3 | 4 | 5 | 6 | 7 |
 *  | 8 | 9 | ... etc
 *
 * @package Solution10\Calendar\Resolution
 */
class Month implements ResolutionInterface
{
    /**
     * @var     array   The current date in it's array parts: Date parts ['day' => x, 'month' => y, 'year' => z]
     */
    protected $currentDate;

    /**
     * @var     int     The number of months to show either side of the current month.
     */
    protected $monthOverflow = array('left' => 0, 'right' => 0);

    /**
     * @var     bool    Whether to show the overflow days in a month or not.
     */
    protected $daysOverflow = false;

    /**
     * Constructor should accept the current date.
     *
     * @param   array   $currentDate    Date parts ['day' => x, 'month' => y, 'year' => z]
     */
    public function __construct(array $currentDate)
    {
        $this->currentDate = $currentDate;
    }

    /*
     * -------------------- Month Overflow -------------------
     */

    /**
     * Sets the number of months either side of the current one.
     * So if it's April, values of (1, 2) gives you March - April - May - June
     *
     * @param   int     $numLeft    Number to the left
     * @param   int     $numRight   Number to the right
     * @return  $this
     */
    public function setMonthOverflow($numLeft, $numRight)
    {
        $this->monthOverflow['left']    = (int)$numLeft;
        $this->monthOverflow['right']   = (int)$numRight;
        return $this;
    }

    /**
     * Returns the month overflows we're using. Return value is an array with 'left'
     * and 'right' keys.
     *
     * @return  array
     */
    public function getMonthOverflow()
    {
        return $this->monthOverflow;
    }

    /*
     * ----------------- Days Overflow --------------------
     */

    /**
     * Sets whether to show "overflow" days in months. These are days that
     * fill-up the ends of the week from other months rather than displaying
     * blank spaces.
     *
     * @param   bool    $useDaysOverflow    True for yes, false for no
     * @return  $this
     */
    public function setDaysOverflow($useDaysOverflow)
    {
        $this->daysOverflow = (bool)$useDaysOverflow;
        return $this;
    }

    /**
     * Returns whether we are using day overflows or not
     *
     * @return  bool
     */
    public function getDaysOverflow()
    {
        return $this->daysOverflow;
    }

    /*
     * --------------- Generating the Cells ------------------
     */

    /**
     * Returns an array of Cell objects representing the current Resolution.
     *
     * @return  Cell[]
     */
    public function buildCells()
    {
        $cells = array();

        // Right, where to begin?

        return $cells;
    }
}
