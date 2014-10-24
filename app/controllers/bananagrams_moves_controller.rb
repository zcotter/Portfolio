class BananagramsMovesController < ApplicationController

  def create
    move = move_params
    move[:bananagrams_game] = BananagramsGame.find(move[:bananagrams_game])
    move[:bananagrams_player] = BananagramsPlayer.find(move[:bananagrams_player])
    @move = BananagramsMove.new(move)
    if @move.save!
      render json: @move.to_json
      @move.delay.notify_other_player
    else
      head :bad_request, content_type: 'application/json'
    end
  end

  def destroy
    @move = find(params[:id])
    if @move.destroy!
      head :ok, content_type: 'application/json'
    else
      head :bad_request, content_type: 'application/json'
    end
  end

  private

  def move_params
    params.require(:bananagrams_move).permit(:bananagrams_game,
                                             :bananagrams_player,
                                             :x0,
                                             :y0.
                                             :x1,
                                             :y1,
                                             :letter)
  end

end
