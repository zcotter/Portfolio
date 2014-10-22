class CreateBananagramsGame < ActiveRecord::Migration
  def change
    create_table :bananagrams_games do |t|
      t.integer :first_player_id
      t.integer :second_player_id
      t.timestamps
    end
  end
end
