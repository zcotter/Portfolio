class BananagramsPlayer < ActiveRecord::Base
  has_many :bananagrams_scores, class_name: 'BananagramsScore'
  has_many :bananagrams_games, class_name: 'BananagramsGame'

  def top_score
    BananagramsScore.where(bananagrams_player: self).order(:score).last
  end
end
