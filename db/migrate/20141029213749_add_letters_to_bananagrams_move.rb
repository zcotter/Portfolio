class AddLettersToBananagramsMove < ActiveRecord::Migration
  def change
    add_column :bananagrams_moves, :letters, :string
  end
end
