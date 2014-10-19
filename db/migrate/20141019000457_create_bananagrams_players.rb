class CreateBananagramsPlayers < ActiveRecord::Migration
  def change
    create_table :bananagrams_players do |t|
      t.string :name
      t.timestamps
    end
  end
end
