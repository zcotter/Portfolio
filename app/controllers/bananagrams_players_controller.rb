class BananagramsPlayersController < ApplicationController
  def create
    @player = BananagramsPlayer.new(player_params)
    if @player.save!
      render json: @player.to_json
    else
      head :bad_request, content_type: 'application/json'
    end
  end

  def player_params
    params.require(:bananagrams_player).permit(:name)
  end
end
