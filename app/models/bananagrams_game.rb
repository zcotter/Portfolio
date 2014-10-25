class BananagramsGame < ActiveRecord::Base
  belongs_to :first_player, class_name: 'BananagramsPlayer', foreign_key: 'first_player_id'
  belongs_to :second_player, class_name: 'BananagramsPlayer', foreign_key: 'second_player_id'
  has_many :bananagrams_move, class_name: 'BananagramsMove'

  def notify_second_player
    gcm = GCM.new(ENV["GCM_API_KEY"])
    reg_ids = [self.second_player.registration_id]
    options = {data: {type: 'GameInvitation', game_id: self.id, requester: self.first_player.name, poc: self.poc}}
    response = gcm.send(reg_ids, options)
    puts response
  end

  def players
    [self.first_player, self.second_player]
  end
end
