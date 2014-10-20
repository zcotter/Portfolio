class BananagramsScoresController < ApplicationController

  def index
    @scores = BananagramsScore.all #TODO make this paginated
    if params[:current_player_id]
      @player =  BananagramsPlayer.find(params[:current_player_id])
      @score = @player.top_score
    end
  end

  def create
    begin
      score = score_params
      score["bananagrams_player"] = BananagramsPlayer.find(score["bananagrams_player"])
      @score = BananagramsScore.new(score)
      if @score.save!

        render json: {rank: @score.rank}.to_json
      else
        head :bad_request, content_type: 'application/json'
      end
    rescue
      head :bad_request, content_type: 'application/json'
    end
  end

  private
  def score_params
    params.require(:bananagrams_score).permit(:score, :bananagrams_player)
  end
end
