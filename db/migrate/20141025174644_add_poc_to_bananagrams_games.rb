class AddPocToBananagramsGames < ActiveRecord::Migration
  def change
    add_column :bananagrams_games, :poc, :boolean
  end
end
