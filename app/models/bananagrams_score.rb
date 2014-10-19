class BananagramsScore < ActiveRecord::Base
  belongs_to :bananagrams_player, class_name: 'BananagramsPlayer'
end
