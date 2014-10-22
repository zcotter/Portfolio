class BananagramsGame < ActiveRecord::Base
  belongs_to :first_player, class_name: 'BananagramsPlayer', foreign_key: 'first_player_id'
  belongs_to :second_player, class_name: 'BananagramsPlayer', foreign_key: 'second_player_id'

  after_save :notify_second_player

  def notify_second_player
    gcm = GCM.new(ENV["GCM_API_KEY"])
    reg_ids = [self.second_player.registration_id]
    options = {data: {type: 'GameInvitation', game_id: self.id, requester: self.second_player.name}}
    response = gcm.send(reg_ids, options)
  end
end
