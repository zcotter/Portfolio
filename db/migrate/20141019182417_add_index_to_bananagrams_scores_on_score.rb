class AddIndexToBananagramsScoresOnScore < ActiveRecord::Migration
  def change
    add_index :bananagrams_scores, :score
  end
end
