class BananagramsPlayer < ActiveRecord::Base
  has_many :bananagrams_scores, class_name: 'BananagramsScore'

  def top_score
    BananagramsScore.where(bananagrams_player: self).order(:score).last
  end
end
