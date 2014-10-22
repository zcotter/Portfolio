class BananagramsGamesController < ApplicationController


  def create
    game = game_params
    game[:first_player] = BananagramsPlayer.find(game[:first_player])
    game[:second_player] = BananagramsPlayer.find(game[:second_player])
    @game = BananagramsGame.new(game)
    if @game.save!
      render json: @game.to_json
      # TODO notify :second_player
    else
      head :bad_request, content_type: 'application/json'
    end
  end

  def game_params
    params.require(:bananagrams_game).permit(:first_player, :second_player)
  end
end
