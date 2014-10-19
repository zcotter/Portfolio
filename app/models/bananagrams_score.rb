class BananagramsScore < ActiveRecord::Base
  belongs_to :bananagrams_player, class_name: 'BananagramsPlayer'

  def rank
    self.class.where('score > ?', self.score).count + 1
  end
end
