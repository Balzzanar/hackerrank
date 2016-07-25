<?php

/**
* Maze Bot, will be walking the maze.
*/
class MazeBot
{
	
	/*
	 *	2-dim array that represents the given vision that the bot has.  
	 */
	private $current_vission;
	private $possible_moves;
	private $preferd_move;
	private $last_move;
	private $current_move;
	private $least_preferd_move;


	function __construct(argument)
	{
		$this->current_vission = null;
		$this->preferd_move = null;
		$this->possible_moves = null;
		$this->last_move = null;
		$this->current_move = null;
		$this->least_preferd_move = null;
	}


	public function input($vision)
	{
		$this->current_vission = $vision;
		$this->possible_moves = array();
		$this->last_move = $this->current_move;
		$this->current_move = null;
		$this->least_preferd_move = $this->get_oppsite_move($this->last_move);
	}


	/**
	 * @name move 
	 * @return string
	 */
	public function move()
	{
		$this->get_possible_moves();

		if (isset($this->preferd_move) && in_array($this->preferd_move, $this->possible_moves))
		{
			$this->current_move = $this->preferd_move;
			return $this->current_move;
		}

		// If last move is among the possible moves choose it.
		if (isset($this->last_move) && in_array($this->last_move, $this->possible_moves))
		{
			$this->current_move = $this->last_move;
			return $this->current_move;
		}

		// Choose a move on random.
		while (! isset($this->current_move))
		{
			$itr = rand(0, count($this->possible_moves -1));
			if ($this->least_preferd_move != $this->possible_moves[$itr]) { $this->current_move = $this->possible_moves[$itr]; }
		}
		return $this->current_move;
	}


	/**
	 * @name get_possible_moves 
	 * @return string
	 */
	public function get_possible_moves()
	{
		if ($this->current_vission[0][1] != '#') array_push($this->possible_moves, 'UP');
		if ($this->current_vission[2][1] != '#') array_push($this->possible_moves, 'DOWN');
		if ($this->current_vission[1][2] != '#') array_push($this->possible_moves, 'RIGHT');
		if ($this->current_vission[1][0] != '#') array_push($this->possible_moves, 'LEFT');

		return $possible_moves;
	}

	/**
	 * @name get_oppsite_move
	 * @param string $move 
	 * @return string
	 */
	private function get_oppsite_move($move)
	{
		if ($move == 'RIGHT') return 'LEFT';
		if ($move == 'LEFT') return 'RIGHT';
		if ($move == 'UP') return 'DOWN';
		if ($move == 'DOWN') return 'UP';
		return '';
	}

}



?>
