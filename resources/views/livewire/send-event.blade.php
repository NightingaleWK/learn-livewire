<div>
    <div>
        <h3>Let's Send a Message</h3>

        <input type="text" wire:model.blur='message'>

        <button wire:click='sendMessage'>Send Message</button>
        <button wire:click='resetMessage'>Reset Message</button>
    </div>
</div>
