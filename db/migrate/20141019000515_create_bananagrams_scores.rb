class CreateBananagramsScores < ActiveRecord::Migration
  def change
    create_table :bananagrams_scores do |t|
      t.integer :score
      t.belongs_to :bananagrams_player, index: true
      t.timestamps
    end
  end
end
