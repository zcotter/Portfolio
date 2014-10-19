class BananagramsPlayer < ActiveRecord::Base
  has_many :bananagrams_scores, class_name: 'BananagramsScore'
end
