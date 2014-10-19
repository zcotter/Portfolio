class BananagramsScoresController < ApplicationController
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
